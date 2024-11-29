<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecentWorks;
use App\Publications;
use App\JoinUsForm;
use App\Mail\HelloMail;
use App\Referral;
use App\Members;
use App\Pages;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

	public function index(Request $request)
	{
		$recentWorks = RecentWorks::where('slide', 1)->orderByDesc('id')->get();
		$recentPublications = Publications::where('slide', 1)->orderByDesc('id')->take(3)->get();
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
		
		// Optional: Convert to JSON if needed
		// $jsonOutput = json_encode($transformedData);
		// print($jsonOutput);
	

		// Colors for Publication
		$colorsPublication = ['bg-purple-800', 'bg-pink-500', 'bg-emerald-600', 'bg-orange-500'];

		return view('frontend.home', ['metaData' => $transformedData, 'recentWorks' => $recentWorks, 'recentPublications' => $recentPublications, 'colors' => $colorsPublication]);
	}

	public function joinus_form_submission(Request  $request)
	{
		$table = new JoinUsForm();
		$table->name = $request->post('name');
		$table->email = $request->post('email');
		$table->phone = $request->post('phone');
		$table->save();
		return "Success";
	}

	public function members(Request $request)
	{
		$members = new Members();
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
	

		return view('frontend.members', [
			'metaData' => $transformedData,
			'members' => $members->get()
		]);
	}

	public function referral(Request $request)
	{
		$recentPublications = Publications::where('slide', 1)->orderByDesc('id')->take(3)->get();
		

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

		return view('frontend.referral' , ['metaData' => $transformedData]);
	}

	public function handle_referral_submission(Request $request)
	{
		$metaData = Pages::all();

		// Validate the form data
		$validated = $request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|max:255',
			'phone' => 'nullable|string|max:20',
			'message' => 'required|string'
		]);

		try {
			
			// Create new member
			$referral = Referral::create([
				'name' => $validated['name'],
				'email' => $validated['email'],
				'contact' => $validated['phone'],
				'message' => $validated['message'],
				'pending' => true
			]);

			

			Mail::to("saadh3939@gmail.com")->send(new HelloMail([
				'name' => $referral->name,
				'email' => $referral->email,
				'contact' => $referral->contact,
				'message' => $referral->message
			]));

			// Filter $metaData which have `page_name` is `email` 
			$emailPage = $metaData->where('page_name', 'email')->first();			
			Mail::to($emailPage)->send(new HelloMail([
				'name' => $referral->name,
				'email' => $referral->email,
				'contact' => $referral->contact,
				'message' => $referral->message
			]));

			// Return success response
			return response()->json([
				'status' => 'success',
				'message' => 'Your message has been submitted successfully!'
			]);
		} catch (\Exception $e) {
			Log::error('Referral Submission Error', [
				'error_message' => $e->getMessage(),
				'error_trace' => $e->getTraceAsString(),
				'input_data' => $validated
			]);

			// Return error response
			return response()->json([
				'status' => 'error',
				'message' => $e->getMessage()
			], 500);
		}
	}

	public function delete_referral_submission($id)
	{
		$member = Referral::find($id);
		$member->delete();
		return response()->json([
			'success' => 'Record Has been Deleted'
		]);
	}

	public function update_state($id)
	{
		$member = Referral::find($id);
		$member->pending = !$member->pending;
		$member->save();
		return response()->json([
			'success' => 'Record Has been Updated'
		]);
	}
}
