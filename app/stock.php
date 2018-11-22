<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $fillable = [
        'stockName',
        'stockQuantity',
        'buyingPrice',
        'sellingPrice',
        'storedDate'
    ];
}
