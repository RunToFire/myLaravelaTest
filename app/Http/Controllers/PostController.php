<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //列表页面
    public function index(){
    	var_dump(21212);die;
    	return view("post/index");
    }
    //详情页面
    public function show(){

    }
    //创建页面
    public function create(){

    }
    //创建逻辑
    public function store(){

    }
    //编辑页面
    public function edit(){

    }
    //编辑逻辑
    public function update(){

    }
    //删除逻辑
    public function delete(){

    }
}
