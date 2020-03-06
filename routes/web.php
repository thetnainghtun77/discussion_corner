<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.dashboard');
});



Route::group([
	'middleware'=>'auth',
	'prefix' => 'backend',
	
], function(){

Route::get('dashboard','BackendController@dashboard')->middleware('role:Admin');

// Route for category
Route::resource('categories','CategoryController')->middleware('role:Admin');



// Route for Post
// Route::resource('posts','PostController');

});

Route::get('userprofile', 'ProfileController@profile')->name('userprofile');

Route::resource('posts','PostController');

// Route for Member
Route::resource('members','MemberController');
// Route::resource('members','MemberController@edit')->name('membersedit');



Auth::routes();

Route::get('/home', 'HomeController@index');

// Route for frontend
Route::get('main','FrontendController@main');

// Route for frontend
Route::get('register','FrontendController@register');

Route::get('showCategory','FrontendController@showCategory');

Route::get('newpost','FrontendController@newpost')->name('newpost');

Route::get('detailpost/{id}','FrontendController@detailPost')->name('detailpost');

//Frontend
Route::get('/frontend','FrontendController@main');


