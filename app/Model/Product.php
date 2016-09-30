<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'sort',
        'name',
        'category_pic',
        'category_des',
        'category_id',
        'main_pic',
        'content',
        'title',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
