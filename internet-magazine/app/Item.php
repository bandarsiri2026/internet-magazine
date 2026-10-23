<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category;


class Item extends Model
{

    public function scopeSearch($query , $s){

        return $query->where('name','LIKE','%'.$s.'%')->orWhere('description','LIKE','%'.$s.'%');


    }

    public function catId(){
        return $this->belongsTo(Category::class);
    }


}
