<?php

namespace App\Http\Controllers;
use App\Models\blogsmodel;

class BlogController extends Controller
{
	public function index()
	{
		$blogPosts = blogsmodel::all();

		return view('frontend.blog', ["blogs" => $blogPosts]);
	}
}
