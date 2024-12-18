<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BackendjoinusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

//Default Controller
Route::get('/', 'HomeController@index');
Route::post('/', [HomeController::class, 'joinus_form_submission']);
Route::post('/referral', [HomeController::class, 'handle_referral_submission'])->name('contact.submit');
Route::delete('/referral/{id}', [HomeController::class, 'delete_referral_submission']);
Route::patch('/referral/{id}', [HomeController::class, 'update_state']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'details']);
Route::get('/publications', 'PublicationController@index');
Route::delete('/backendpublication/{id}', [BackendjoinusController::class, 'delete']);



Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile', 'UserController@getProfile');
Route::get('user/theme', 'UserController@getTheme');
Route::get('user/login', 'UserController@getLogin');
Route::get('user/register', 'UserController@getRegister');
Route::get('user/logout', 'UserController@getLogout');
Route::get('user/reminder', 'UserController@getReminder');
Route::get('user/reset/{any?}', 'UserController@getReset');
Route::get('user/reminder', 'UserController@getReminder');
Route::get('user/activation', 'UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}', 'UserController@socialize');
Route::get('user/autosocialize/{any?}', 'UserController@autosocialize');
//
Route::post('user/signin', 'UserController@postSignin');
Route::post('user/login', 'UserController@postSigninMobile');
Route::post('user/signup', 'UserController@postSignupMobile');
Route::post('user/create', 'UserController@postCreate');
Route::post('user/saveprofile', 'UserController@postSaveprofile');
Route::post('user/savepassword', 'UserController@postSavepassword');
Route::post('user/doreset/{any?}', 'UserController@postDoreset');
Route::post('user/request', 'UserController@postRequest');

/* Posts & Blogs */
Route::get('posts', 'HomeController@posts');
Route::get('posts/category/{any}', 'HomeController@posts');
Route::get('posts/read/{any}', 'HomeController@read');
Route::post('posts/comment', 'HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}', 'HomeController@remove');
// Start Routes for Notification 
Route::resource('notification', 'NotificationController');
Route::get('home/load', 'HomeController@getLoad');
Route::get('home/lang/{any}', 'HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');


Route::resource('sximoapi', 'SximoapiController');
Route::resource('services/posts', 'Services\PostController');



// Routes for  all generated Module
include('module.php');
// Custom routes  
$path = base_path() . '/routes/custom/';
$lang = scandir($path);
foreach ($lang as $value) {
	if ($value === '.' || $value === '..') {
		continue;
	}
	include('custom/' . $value);
}
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard', 'DashboardController');
});


Route::group(['namespace' => 'Sximo', 'middleware' => 'auth'], function () {
	// This is root for superadmin

	include('sximo.php');
});

Route::group(['namespace' => 'Core', 'middleware' => 'auth'], function () {

	include('core.php');
});
