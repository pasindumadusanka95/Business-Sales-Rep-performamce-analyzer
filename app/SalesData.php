<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesData extends Model
{
 
    protected $table = 'sales';

    protected $fillable = [
        'shop_name','shop_address','stock_type','quantity','unit_price','discount','total_price','repid','remarks','receiptNo'
    ];
}
