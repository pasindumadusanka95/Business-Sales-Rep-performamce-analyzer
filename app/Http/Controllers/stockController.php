<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\stock;
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
        $stock = stock::all();

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
            'stock_name' => 'required',
            'stock_qty' => 'required|integer',
            'buying_price' => 'required|float',
            'selling_price' => 'required|float',
            'stored_date' => 'required|date',
        ]);

        $stock = new stock;
        $stock->stock_name = $request->input('stock_name');
        $stock->stock_qty = $request->input('stock_qty');
        $stock->buying_price = $request->input('buying_price');
        $stock->selling_price = $request->input('selling_price');
        $stock->stored_date = $request->input('stored_date');

        $stock->save();
        return redirect('/stock_keeper')->with('success', 'Stock has been added');
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
        $request->validate([

            'stock_name' => 'required',

            'stock_qty' => 'required|integer',

            'stock_name' => 'required',
            'stock_qty' => 'required|integer',

            'buying_price' => 'required|integer',
            'selling_price' => 'required|integer',
            'stored_date' => 'required|integer',
        ]);

        $stock = stock::find($id);
        $stock->stock_name = $request->get('stock_name');

        $stock->stock_qty = $request->get('stock_qty');
        $stock->buying_price = $request->get('buying_price');
        $stock->selling_price = $request->get('selling_price');
        $stock->stored_date = $request->get('stored_date');
        $stock->save();

        return redirect('/stock_keeper')->with('success', 'Stock has been updated');
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