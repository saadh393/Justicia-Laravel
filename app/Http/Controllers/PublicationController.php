<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publicationmodel;

class PublicationController extends Controller
{
    public function index(){
	   $publications = publicationmodel::all();
		return view('frontend.publication', ["publications" => $publications]);

    }
}
