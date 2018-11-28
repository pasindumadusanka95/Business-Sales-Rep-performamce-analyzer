<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{

    protected $table = 'stocks';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'stockName',
        'stockQuantity',
        'buyingPrice',
        'sellingPrice',
        'stored_date'
    ];
}
