<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecentWorks;
use App\Publications;


class HomeController extends Controller
{

	public function index(Request $request)
	{
		$recentWorks = RecentWorks::latest()->take(3)->get();
		$recentPublications = Publications::latest()->take(3)->get();

		// Colors for Publication
		$colorsPublication = ['bg-purple-800','bg-pink-500','bg-emerald-600','bg-orange-500'];

		return view('frontend.home', ['recentWorks' => $recentWorks, 'recentPublications' => $recentPublications, 'colorsPublication' => $colorsPublication]);
	}
}

