<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////Route of adminDashboard
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
  
    

});

////// Route of userDashboard
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User','middleware'=>['auth','user']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard');

});

//// Route of users
Route::resource('users','UserController');

/// Route of students
Route::resource('students','StudentController');
Route::get('updateToOutOfFollowup/{id}', 'StudentController@updateToOutOfFollowup')->name('outOfFollowup');
Route::get('backToFollowups/{id}', 'StudentController@backToFollowup')->name('inFollowup');

///Route of comments
Route::post('addcomments/{id}', 'CommentController@addComment')->name('addComments');
Route::get('deletas/{id}', 'CommentController@delete')->name('deleteComments');
Route::put('updates/{id}', 'CommentController@update')->name('updateComments');






