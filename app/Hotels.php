<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
   /**
     * Get the comments for the hotel.
     */
    public function comments()
    {
        return $this->hasMany('App\Comments');
    }
}
