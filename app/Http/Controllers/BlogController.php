<?php

namespace App\Http\Controllers;
use App\RecentWorks;

class BlogController extends Controller
{
	public function index()
	{
		$recentWorks = RecentWorks::latest()->get();

		// Colors for Publication
		$colorsPublication = ['bg-purple-800','bg-pink-500','bg-emerald-600','bg-orange-500'];

		return view('frontend.blog', ["recentWorks" => $recentWorks, 'colorsPublication' => $colorsPublication]);
	}
}
