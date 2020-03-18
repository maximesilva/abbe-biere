<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function users()
    {
    return $this->belongsTo('App\User');
    }

    public function orderline()
    {
        return $this->hasOne('App\OrderLine');
    }
}
