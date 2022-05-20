<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(){
	    $data = [
		    'title' => "International Women's Day 2022: Date, history, significance, theme this year",
		    'date' => 'November 19, 2022',
		    'image' => "/assets/publications/publication-2.jpg",
		    'id' => 1
	    ];
		return view('frontend.publication', ["data" => $data]);

    }
}
