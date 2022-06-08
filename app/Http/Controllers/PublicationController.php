<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publications;

class PublicationController extends Controller
{
    public function index(){
      
    $recentPublications = Publications::latest()->get();

		return view('frontend.publication', ["recentPublications" => $recentPublications]);

    }
}
