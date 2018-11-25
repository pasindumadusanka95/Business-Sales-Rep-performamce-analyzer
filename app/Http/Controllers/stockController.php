<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use app\stock;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.add_stock');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stock_name' => 'required',
            'stock_qty' => 'required|integer',
            'buying_price' => 'required|decimal',
            'selling_price' => 'required|decimal',
            'stored_date' => 'required|date',
        ]);
        $stock = new stock([
            'stock_name' => $request->get('stock_name'),
            'stock_qty' => $request->get('stock_qty'),
            'buying_price' => $request->get('buying_price'),
            'selling_price' => $request->get('selling_price'),
            'stored_date' => $request->get('stored_date'),

        ]);
        $stock->save();
        return redirect('/stock')->with('success', 'Stock has been added');
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
            'stock_name'=>'required',
            'stock_qty'=> 'required|integer',
            'buying_price' => 'required|integer',
            'selling_price' => 'required|integer',
            'stored_date' => 'required|integer'
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

