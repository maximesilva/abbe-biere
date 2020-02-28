<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orderline()
    {
        return $this->hasMany(OrderLine::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }


}
