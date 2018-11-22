<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesRep extends Model
{
    protected $table = 'salesrep';
    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'address', 'phone', 'salary', 'grade', 'sales_per_month',
    ];

    //$pro=App\SupplierData::all();


}
