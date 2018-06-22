<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class News extends Model
{
    use Sluggable;

    protected $table='news';
    public $timestamps=false;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function newsCategory()
    {
        return $this->belongsTo('App\NewsCategory','category_id','id');
    }


}
