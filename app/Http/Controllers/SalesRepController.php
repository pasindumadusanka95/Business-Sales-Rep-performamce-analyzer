<?php

namespace App\Http\Controllers;

use App\SalesData;

class SalesRepController extends Controller
{
    protected function salesValidator(Request $request)
    {
        return Validator::make($data, [
            'dateOfSale' => 'required',
            'shop_name' => 'required|string|max:255',
            'shop_address' => 'required|string|max:255',
            'stock_type' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'unit_price' => 'required|int|max:11',
            'discount' => 'required|int|max:11',
            'total_price' => 'required|int|max:11',
            'receiptNo' => 'required|int|max:10',
            'remarks' => 'required|string|max:255',
        ]);
    }

    public function addSale(Request $request)
    {
        if (salesValidator($request));

        SalesData::create([

        ]);

    }
}