<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
