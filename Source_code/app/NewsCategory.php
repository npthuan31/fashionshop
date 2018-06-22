<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table='news_category';
    public $timestamps=false;

    public function news()
    {
        return $this->hasMany('App\News','category_id','id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
