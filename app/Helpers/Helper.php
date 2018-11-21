<?php
namespace App\Helpers;

use Illuminate\Http\Request;

class Helper
{

    public static function current_page($path)
    {
        //called in lyt_adm.blade.php
        return request()->path() == $path;
    }

}