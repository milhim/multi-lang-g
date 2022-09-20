<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::resource('post/{locale}', PostController::class);
Route::get('/', function () {
  
});
Route::get('/post-in-ar/{id}', function ($id) {
    $post = Post::find($id);
    return $post->translate('ar');
});
Route::get('/post-in-en/{id}', function ($id) {
    $post = Post::find($id);
    return $post->translate('en');
});
