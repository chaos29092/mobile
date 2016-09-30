<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable =[
        'sort',
        'tag',
        'name',
        'main_pic',
        'content',
        'title',
        'description',
    ];
}
