<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table='order_detail';
    public $timestamps=false;

    public function order()
    {
        return $this->belongsTo('App\Orders','order_id','id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product','product_id','id');
    }
}
