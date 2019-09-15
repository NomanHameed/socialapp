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

use Illuminate\Support\Facades\Route;
//use Illuminate\Routing\Route;

Route::post('/login','UserController@login');
Route::get('users', 'UserController@index' )->name('profile');
Route::post('/users','UserController@store');
Route::post('/users/update', 'UserController@updateProfile')->name('profile.update');
Route::get('/post','PostController@index');
Route::post('/post','PostController@store')->name('create_post');
Auth::routes();

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/upload/images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});

Route::get('/', 'HomeController@index')->name('home');
