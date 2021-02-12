<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function article(){
        return $this->hasMany('App\Article','id','category_id');
    }
}
