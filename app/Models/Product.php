<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Attribute Mutaion
    function getImageAttribute($value)
    {
        echo 'getImage: ' .  $value . '\n';
        return url($value);
    }

    function getCreatedAtAttribute($value)
    {
        echo 'getCreatedAt' . $value . '\n';
        return Carbon::parse($value)->diffForHumans();
    }
    function getUpdatedAtAttribute($s)
    {
        echo 'getUpdatedAt' . $s . '\n';
        return Carbon::parse($s)->diffForHumans();
    }
}
