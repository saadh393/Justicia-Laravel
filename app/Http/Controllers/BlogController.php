<?php

namespace App\Http\Controllers;

use App\Pages;
use App\RecentWorks;
use App\OurWorkCategories;

class BlogController extends Controller
{
	public function index()
	{
		$recentWorks = RecentWorks::latest()->get();
		$metaData = Pages::all();
		$categories = OurWorkCategories::all();

		$transformedData = [];

		foreach ($metaData as $page) {
			$transformedData[$page['page_name']] = [
				'id' => $page['id'],
				'page_name' => $page['page_name'],
				'title' => $page['title'],
				'description' => $page['description'],
				'meta_image' => $page['meta_image'],
			];
		}
		
		// Optional: Convert to JSON if needed
		// $jsonOutput = json_encode($transformedData);
		// print($jsonOutput);

		// Colors for Publication
		$colorsPublication = ['purple-800','pink-500','emerald-600','orange-500'];

		return view('frontend.blog', ['categories' => $categories, 'metaData' => $transformedData, "recentWorks" => $recentWorks, 'colorsPublication' => $colorsPublication]);
	}

	public function details($id){
		$blogDetails = RecentWorks::where('id', $id)->firstOrFail();
		return view('frontend.blogDetails', ['blog' => $blogDetails]);
	}
}
