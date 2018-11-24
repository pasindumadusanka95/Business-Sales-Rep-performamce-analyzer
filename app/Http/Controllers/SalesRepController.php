<?php

namespace App\Http\Controllers;
use App\SalesData;
use App\User;
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
        return view('sales_rep.repHome');
    }
    public function profile()
    {
        return view('sales_rep.repProfile');
    }
    public function addSale()
    {
        return view('sales_rep.salesRep');
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
        $user = Auth::user();
        $repid = $user->id;

        
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
