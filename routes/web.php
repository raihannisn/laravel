<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Raihan nur insan",
        "email" => "raihannurinsan@gmail.com",
        "nrp"  => "123456789",
        "jurusan" => "Teknik Informatika",
        "image" => "Raihan.jpg"
    ]);
});



Route::get('/post', function () {
    return view('posts', [
        "title" => "Posts",
        "author" => "Raihan nur insan",
        "posts" => Post::all()
    ]);
});

// halaman single post

Route::get('posts/{slug}', function($slug){
    
    return view('post',[
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});
