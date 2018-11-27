<?php

namespace App\Http\Controllers;

use App\SalesData;
use App\SalesRep;
use App\stock;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Khill\Lavacharts\Lavacharts;

class SalesRepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id = $user->id;
        $srep = SalesRep::where('id', $id)->first();
        //include $user & $srep -> view repHome
        return view('sales_rep.repHome', compact('user', 'srep'));
    }
    public function profile()
    {

        $totalsales = SalesData::count();
        $user = Auth::user();
        $id = $user->id;
        $srep = SalesRep::where('id', $id)->first();
        $numsales = DB::select(DB::raw("SELECT count(`total_price`) AS 'numSales',sum(`total_price`) AS 'totalRevenue',DATE(`created_at`) AS 'Date' FROM sales where sales.repid=$id GROUP BY DATE(`created_at`);"));
        //$sales = json_encode($sales);
        //foreach ($sales as $i) {
        // \error_log("test new");
        // for ($a = 0; $a < sizeof($sales); $a++) {
        //     print("");
        //     print_r($sales[$a]->total_price);
        // }

        $lava = new Lavacharts;

        $sales_performance = $lava->DataTable(); // Lava::DataTable() if using Laravel

        $sales_performance->addDateColumn('Day of Month')
            ->addNumberColumn('Sale');

        foreach ($numsales as $i) {
            $sales_performance->addRow([
                $i->Date, $i->numSales,
            ]);
        };

        $chart = \Lava::CalendarChart('FreqSales', $sales_performance, [
            'title' => 'Frequency of Sales',
            'fontSize' => 12,
            'unusedMonthOutlineColor' => [
                'stroke' => '#ECECEC',
                'strokeOpacity' => 0.75,
                'strokeWidth' => 1,
            ],
            'dayOfWeekLabel' => [
                'color' => '#4f5b0d',
                'fontSize' => 16,
                'italic' => true,
            ],
            'noDataPattern' => [
                'color' => '#DDD',
            ],
            'colorAxis' => [
                'colors' => ['#ffb8a0', '#f96332'],
            ],
        ]);

        $sales_totalRev = $lava->DataTable();

        $sales_totalRev->addDateColumn('Day of Month')
            ->addNumberColumn('Revenue');

        foreach ($numsales as $i) {
            $sales_totalRev->addRow([
                $i->Date, $i->totalRevenue,
            ]);
        };

        $chart2 = \Lava::ColumnChart('SalesRev', $sales_totalRev, [
            'title' => 'Revenue Per Day',
            'titleTextStyle' => [
                'fontSize' => 12,
            ],
            'colors' => ['#f96332'],
            'opacity' => [0.5],
        ]);

        $sales_perType = $lava->DataTable();

        $sales_perType->addStringColumn('Type')
            ->addNumberColumn('Quantity');

        $sperType = DB::select(DB::raw("SELECT sum(`quantity`) as 'Quantity',`stock_type` from sales where sales.repid=$id Group By `stock_type`"));
        foreach ($sperType as $m) {
            $sales_perType->addRow([
                $m->stock_type, $m->Quantity,
            ]);
        }

        $chart3 = \Lava::BarChart('SalesPType', $sales_perType, [
            'title' => 'Sales Per Type',
            'fontSize' => 12,
            'colors' => ['#f96332'],
        ]);

        //include $user & $srep -> view repProfile
        return view('sales_rep.repProfile', compact('user', 'srep', 'totalsales', 'FreqSales', 'SalesRev', 'SalesPType'));
    }
    public function addSale()
    {
        $user = Auth::user();
        $id = $user->id;
        $srep = SalesRep::where('id', $id)->first();
        $prod = stock::select('stockName')->groupBy('stockName')->get();
        //include $user & $srep -> view salesrep
        return view('sales_rep.salesRep', compact('user', 'srep', 'prod'));
    }

    public function findQty(Request $request)
    {
        $qty = stock::select('stockQuantity')->where('stockName', $request->id)->first();
        return response()->json($qty);
    }

    //used in salesRep.blade.php to get the availability of the particular stock type
    public function checkAvailability(Request $request)
    {
        //console . log("camwe here");
        $data = stock::select('stockQuantity', 'sellingPrice')->where('stockName', $request->prod_name)->first();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Auth check
        $user = Auth::user();
        $repid = $user->id;

        //retriev data + update -> stock
        $stype = $request->prod_id;
        $stock = stock::where('stockName', $stype)->first();

        // salesrep info
        $rep = SalesRep::where('id', $repid)->first();

        //sales create
        SalesData::create([
            'shop_name' => $request->shop_name,
            'shop_address' => $request->shop_address,
            'stock_type' => $request->prod_id,
            'quantity' => $request->quantity,
            'unit_price' => $request->unit_price,
            'discount' => $request->discount,
            'total_price' => $request->total_price,
            'receiptNo' => $request->receiptNo,
            'repid' => $repid,
            'remarks' => $request->remarks,
        ]);

        //stock update
        $stock->stockQuantity = ($stock->stockQuantity) - ($request->quantity);
        $stock->save();

        //update rep info
        $rep->sales_per_month = ($rep->sales_per_month) + 1;
        $rep->net_sales = ($rep->net_sales) + ($request->total_price);
        $rep->total_items = ($rep->total_items) + ($request->quantity);
        $rep->save();

        return redirect()->route('srsale');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}