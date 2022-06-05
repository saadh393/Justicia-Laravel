<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecentWorks;


class HomeController extends Controller
{

	public function index(Request $request)
	{
		$recentWorks = RecentWorks::latest()->get();

		return view('frontend.home', ['recentWorks' => $recentWorks]);
	}
}

