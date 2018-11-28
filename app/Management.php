<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'management';
    protected $fillable = [
        'id','grade','basic_sal','add_rate','target',
    ];
}
