<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecentWorks;
use App\Publications;
use App\JoinUsForm;


class HomeController extends Controller
{

	public function index(Request $request)	{
		$recentWorks = RecentWorks::latest()->take(5)->get();
		$recentPublications = Publications::latest()->take(3)->get();

		// Colors for Publication
		$colorsPublication = ['bg-purple-800','bg-pink-500','bg-emerald-600','bg-orange-500'];

		return view('frontend.home', ['recentWorks' => $recentWorks, 'recentPublications' => $recentPublications, 'colors' => $colorsPublication]);
	}

	public function joinus_form_submission(Request  $request){
		$table = new JoinUsForm();
		$table->name = $request->post('name');
		$table->email = $request->post('email');
		$table->phone = $request->post('phone');
		$table->save();
		return "Success";
	}
}

