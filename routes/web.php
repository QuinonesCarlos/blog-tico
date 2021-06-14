<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('blog');
// });
Route::get('/ticosolutions', function () {
    return view('inicio');
});
// Route::get('/temas', function () {
//     return view('temas');
// });
// Route::get('/redactores', function () {
//     return view('redactores');
// });
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/faq', function () {
    return view('faq');
});

Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/home/{id}', 'App\Http\Controllers\HomeController@show');

Route::get('/admin', 'App\Http\Controllers\AdminController@index');

// Route::middleware('auth:api')->get('/admin', 'App\Http\Controllers\AdminController@index');

// Route::get('/posts', 'App\Http\Controllers\PostsController@index');
// Route::get('/posts/create', 'App\Http\Controllers\PostsController@create');
// Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
// Route::post('/posts', 'App\Http\Controllers\PostsController@store');
// Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostsController@edit');
// Route::patch('/posts/{post}', 'App\Http\Controllers\PostsController@update');
// Route::delete('/posts/{post}', 'App\Http\Controllers\PostsController@destroy');

Route::resource('posts', 'App\Http\Controllers\PostsController');//->middleware('role:admin,redactor');

Route::resource('users', 'App\Http\Controllers\UsersController')->middleware('role:admin,admin-usuarios');

Route::resource('roles', 'App\Http\Controllers\RolesController')->middleware('can:isAdmin');
