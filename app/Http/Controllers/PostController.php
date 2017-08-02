<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
class PostController extends Controller
{
    //列表页面
    public function index(){
    	$posts = Post::orderBy('created_at','desc')->paginate(5);
       	return view("post/index",compact('posts'));
    }
    //详情页面
    public function show(Post $post){
    	return view("post/show",compact('post'));
    }
    //创建页面
    public function create(){
    	return view("post/create");
    }
    //创建逻辑
    public function store(){
    	$this->validate(request(),[
    		'title'=>'required|string|max:100|min:5',
    		'content'=>'required|string|min:10'
    		]);
    	Post::create(request(['title','content']));
    	return redirect('/posts');
    }
    //编辑页面
    public function edit(){
    	return view("post/edit");
    }
    //编辑逻辑
    public function update(){
    	return;
    }
    //删除逻辑
    public function delete(){
    	return;
    }
    //搜索文章页面
    public function search(){
    	return view("post/search");
    }
}
