<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Attribute Mutaion
    function getImageAttribute($value)
    {
        echo 'getImage: ' .  $value;
        return url($value);
    }

    function getCreatedAtAttribute($value)
    {
        echo 'getCreatedAt' . $value;
        return Carbon::parse($value)->diffForHumans();
    }
    function getUpdatedAtAttribute($s)
    {
        echo 'getUpdatedAt' . $s;
        return Carbon::parse($s);
    }
}
