<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockMove extends Model
{
     public function phone()
    {
        return $this->belongsTo('App\Product');
    }
}
