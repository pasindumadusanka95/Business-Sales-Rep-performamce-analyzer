<?php

namespace App\Http\Controllers;
use App\SalesData;
use App\User;
use App\SalesRep;
use App\stock;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        $srep = SalesRep::where('id',$id)->first();
        //include $user & $srep -> view repHome
        return view('sales_rep.repHome',compact('user','srep'));
    }
    public function profile()
    {
        $user = Auth::user();
        $id = $user->id;
        $srep = SalesRep::where('id',$id)->first();
        //include $user & $srep -> view repProfile
        return view('sales_rep.repProfile',compact('user','srep'));
    }
    public function addSale()
    {
        $user = Auth::user();
        $id = $user->id;
        $srep = SalesRep::where('id',$id)->first();
        $prod = stock::all();
        //include $user & $srep -> view salesrep
        return view('sales_rep.salesRep',compact('user','srep','prod'));
    }

    public function findQty(Request $request){
        $qty  = stock::select('stockQuantity')->where('id',$request->id)->first();
        return response()->json($qty);
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
        $stype = $request->stock_type;
        $stock = stock::where('stockName',$stype)->first();

        // salesrep info
        $rep = SalesRep::where('id',$repid)->first();

        //sales create
        SalesData::create([
            'shop_name' => $request->shop_name,
            'shop_address' => $request->shop_address,
            'stock_type' => $request->stock_type,
            'quantity' => $request->quantity,
            'unit_price' => $request->unit_price,
            'discount' => $request->discount,
            'total_price' => $request->total_price,
            'receiptNo' => $request->receiptNo,
            'repid' => $repid,
            'remarks' => $request->remarks,
        ]);
        
        //stock update
        $stock->stockQuantity = ($stock->stockQuantity)-($request->quantity);
        $stock->save();

        //update rep info
        $rep->sales_per_month = ($rep->sales_per_month)+1;
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
