<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];//不可注入数据
    //可以注入数据字段
    protected $fillable = ['title','content'];
}
