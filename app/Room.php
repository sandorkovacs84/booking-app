<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function accommodation()
    {
        return $this->belongsTo('App\Accommodation');
    }
}
