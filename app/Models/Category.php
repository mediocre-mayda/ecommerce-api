<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
