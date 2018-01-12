<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog_post;

class PostsController extends Controller
{

	public function index(){
		$posts = Blog_post::all();
		return view('posts.all_posts', compact('posts'));
	}

	public function create(){
		return view('posts.create');
	}

	public function store(Request $request){
    	$Blog_posts = Blog_post::create($request->all());
    	return redirect('/posts');
    }

}
