<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'table_management';
    protected $fillable = [
        'grade','basic_sal','add_rate',
    ];
}
