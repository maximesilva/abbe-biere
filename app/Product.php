<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orderline()
    {
        return $this->hasMany('App\OrderLine');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }


}
