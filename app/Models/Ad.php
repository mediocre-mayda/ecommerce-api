<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ad extends Model
{
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
