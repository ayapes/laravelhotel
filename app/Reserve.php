<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    public function guest()
    {
        return $this->belongsTo('App\Guest');
    }
}
