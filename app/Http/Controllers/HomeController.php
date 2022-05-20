<?php namespace App\Http\Controllers;

use App\Models\Post;
use App\Library\Markdown;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect;

class HomeController extends Controller
{

	public function index(Request $request)
	{
	return view('frontend.home');
	}
}

