<?php

use App\Models\Post;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostMakerController;
use App\Models\Comment;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::paginate(2)
    ]);
});

Route::get('/post/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug),
        'comments' => Comment::where('post_id', '=', $slug)->get()
    ]);
});

Route::get('/addPost', function () {
    return view('addPost');
});

Route::post('/', [PostController::class, 'store']);
Route::post('/addPost', [PostMakerController::class, 'storePost']);