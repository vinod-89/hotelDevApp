<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
     /**
     * Get the hotel associated with the comment.
     */
    public function hotel()
    {
        return $this->hasOne('App\Hotels');
    }
}
