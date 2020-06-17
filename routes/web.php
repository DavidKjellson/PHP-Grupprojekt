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

Route::get('/','startpageController@startpage')->name('startpage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/admin/teams', function () {
//     return view('admin/show_teams.teams');
// });


// Strukturerar routerna med prefix och namn, OBS! glöm inte ändra i app.blade.php 
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});


Route::resource('/teams', 'TeamsController');
