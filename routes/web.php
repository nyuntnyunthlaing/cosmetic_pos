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

Route::get('{any}', function () {

    return view('Home');

})->where('any', '.*');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', 'App\Http\Controllers\UserController');


    Route::resource('role', 'App\Http\Controllers\RoleController');
    Route::resource('Home', 'App\Http\Controllers\HomeController');



    Route::get('/profile', 'App\Http\Controllers\UserController@profile')->name('user.profile');

    Route::post('/profile', 'App\Http\Controllers\UserController@postProfile')->name('user.postProfile');

    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');

    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');
});



Auth::routes();

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "App\Http\Controllers\UserController@getAll");
Route::get("/getAllRoles", "App\Http\Controllers\RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'App\Http\Controllers\UserController@store');
Route::put('/account/update/{id}', 'App\Http\Controllers\UserController@update');
Route::delete('/delete/user/{id}', 'App\Http\Controllers\UserController@delete');
Route::get('/search/user', 'App\Http\Controllers\UserController@search');
