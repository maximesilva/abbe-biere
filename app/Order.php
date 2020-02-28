<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customers()
    {
    return $this->belongsTo(Customer::class);
    }

    public function orderline()
    {
        return $this->hasOne(OrderLine::class);
    }
}
