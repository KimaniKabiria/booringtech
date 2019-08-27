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
    return view('welcome');
});

Auth::routes();

Route ::prefix('manage')->middleware('role:superadministrator|administrator')->group(function (){
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'ManageUserController');
    Route::resource('/permissions', 'ManagePermissionsController');
    Route::resource('/roles', 'ManageRolesController');
});

Route ::prefix('studio')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function(){
    Route::get('/', 'StudioController@index');
    Route::get('/dashboard', 'StudioController@dashboard')->name('studio.dashboard');
    Route::resource('/posts', 'PostsController');
    Route::resource('/category', 'CategoryController')->middleware('role:superadministrator|administrator|editor');
    Route::resource('/tags', 'TagsController');
});

Route::get('/home', 'HomeController@index')->name('home');
