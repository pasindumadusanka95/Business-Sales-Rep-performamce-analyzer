<?php

namespace App\Http\Controllers;

use App\stock;
use DB;
use Illuminate\Http\Request;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stock_keeper.stock_keeper_profile');
    }

    public function profile()
    {
        return view('stock_keeper.stock_keeper_profile');
    }
    public function addStock()
    {
        return view('stock_keeper.add_stock');
    }

    public function viewStock()
    {

        $stock = DB::select(DB::raw("SELECT * from stocks"));

        return view('stock_keeper.view_stock', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'stockName' => 'required',
            'stockQuantity' => 'required|integer',
            'buyingPrice' => 'required|integer',
            'sellingPrice' => 'required|integer',
            'storedDate' => 'required|date',
        ]);

        $stock = new stock;
        $stock->stockName = $request->input('stockName');
        $stock->stockQuantity = $request->input('stockQuantity');
        $stock->buyingPrice = $request->input('buyingPrice');
        $stock->sellingPrice = $request->input('sellingPrice');
        $stock->storedDate = $request->input('storedDate');

        $stock->save();
        $request->session()->flash('alert-success', 'Stock has been added Successfully');
        return redirect()->route('stockview');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $stock = stock::where('id', $request->id)->first();
        return view('stock_keeper.edit', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        error_log("called" . $request->stockName);
/*
$request->validate([

'stockName' => 'required',
'stockQuantity' => 'required|integer',
'buyingPrice' => 'required|integer',
'sellingPrice' => 'required|integer',
'storedDate' => 'required',
]);
 */
        $stock = stock::find($request->id);
        $stock->stockName = $request->stockName;
        error_log("stock");

        $stock->stockQuantity = $request->stockQuantity;
        $stock->buyingPrice = $request->buyingPrice;
        $stock->sellingPrice = $request->sellingPrice;
        $stock->storedDate = $request->storedDate;
        $stock->save();

        $request->session()->flash('alert-success', 'Stock has been updated Successfully');
        //return $this->viewStock();
        return redirect()->route('stockview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {

    }

    public function delete(Request $request)
    {
        $stock = stock::find($request->id);
        print_r($request->id);
        if ($stock != null) {
            //print_r($stock);
            $stock->delete();

            $request->session()->flash('alert-success', 'Stock has been deleted Successfully');
            //return $this->viewStock();
            return redirect()->route('stockview');
        } else {
            $request->session()->flash('alert-danger', 'Error! Please try again');
            //return $this->viewStock();
            return redirect()->route('stockview');
        }
    }
}