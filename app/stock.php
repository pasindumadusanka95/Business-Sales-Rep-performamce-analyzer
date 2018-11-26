<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{

    protected $table = 'stocks';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'stock_name',
        'stockQuantity',
        'buying_price',
        'selling_price',
        'stored_date'
    ];
}
