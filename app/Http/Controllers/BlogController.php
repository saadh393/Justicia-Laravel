<?php

namespace App\Http\Controllers;
use App\RecentWorks;

class BlogController extends Controller
{
	public function index()
	{
		$recentWorks = RecentWorks::latest()->get();

		// Colors for Publication
		$colorsPublication = ['purple-800','pink-500','emerald-600','orange-500'];

		return view('frontend.blog', ["recentWorks" => $recentWorks, 'colorsPublication' => $colorsPublication]);
	}

	public function details($id){
		$blogDetails = RecentWorks::where('id', $id)->firstOrFail();
		return view('frontend.blogDetails', ['blog' => $blogDetails]);
	}
}
