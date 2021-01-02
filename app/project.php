<?php

namespace App;
use App\category;
use App\image;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo('App\category','cat_id');

    }
    public  function image()
    {
        return$this->hasMany('image');
    }
}
