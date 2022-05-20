<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
	public function index()
	{
		$data = [
			'title' => "International Women's Day 2022: Date, history, significance, theme this year",
			'date' => 'November 19, 2022',
			'description' => "International Women's Day 2022: Date, history, significance, theme this year",
			'image' => "/assets/post-thumb.png",
			'id' => 1
		];
		return view('frontend.blog', ["data" => $data]);
	}
}
