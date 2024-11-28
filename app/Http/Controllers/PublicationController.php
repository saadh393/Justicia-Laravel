<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;
use App\Publications;

class PublicationController extends Controller
{
    public function index(){
      
    $recentPublications = Publications::latest()->get();
    $metaData = Pages::all();

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

		return view('frontend.publication', ['metaData' => $transformedData,"recentPublications" => $recentPublications]);

    }
}
