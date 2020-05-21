<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Attribute Mutaion
    function getImageAttribute($value)
    {
        return url($value);
    }

    function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
    function getUpdatedAtAttribute($s)
    {
        return Carbon::parse($s)->diffForHumans();
    }
}
