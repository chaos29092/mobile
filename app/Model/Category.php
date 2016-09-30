<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =[
        'sort',
        'name',
        'big_pic',
        'small_pic',
        'category_des',
        'title',
        'description',
    ];

    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }
}
