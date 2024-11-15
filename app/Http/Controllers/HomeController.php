<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecentWorks;
use App\Publications;
use App\JoinUsForm;
use App\Referral;
use App\Members;


class HomeController extends Controller
{

	public function index(Request $request)
	{
		$recentWorks = RecentWorks::where('slide', 1)->orderByDesc('id')->get();
		$recentPublications = Publications::where('slide', 1)->orderByDesc('id')->take(3)->get();

		// Colors for Publication
		$colorsPublication = ['bg-purple-800', 'bg-pink-500', 'bg-emerald-600', 'bg-orange-500'];

		return view('frontend.home', ['recentWorks' => $recentWorks, 'recentPublications' => $recentPublications, 'colors' => $colorsPublication]);
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

		return view('frontend.members', [
			'members' => $members->get()
		]);
	}

	public function referral(Request $request)
	{
		return view('frontend.referral');
	}

	public function handle_referral_submission(Request $request)
	{
		// return $request->all();
		// Validate the form data
		$validated = $request->validate([
			'name' => 'required|string|max:255',
			'email' => 'required|email|max:255',
			'phone' => 'nullable|string|max:20',
			'message' => 'required|string'
		]);

		try {
			// Create new member
			$member = Referral::create([
				'name' => $validated['name'],
				'email' => $validated['email'],
				'contact' => $validated['phone'],
				'message' => $validated['message'],
				'pending' => true
			]);

			// Return success response
			return response()->json([
				'status' => 'success',
				'message' => 'Your message has been submitted successfully!'
			]);
		} catch (\Exception $e) {
			// Return error response
			return response()->json([
				'status' => 'error',
				'message' => $e
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
