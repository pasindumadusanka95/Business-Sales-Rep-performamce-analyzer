<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesRep extends Model
{
    protected $table = 'salesrep';
    public $timestamps = false;

    protected $fillable = [
        'id','name', 'email', 'address', 'phone', 'salary', 'grade', 'sales_per_month','net_sales','total_items',
    ];

    //$pro=App\SupplierData::all();


}
