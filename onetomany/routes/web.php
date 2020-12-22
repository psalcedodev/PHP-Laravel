<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;

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


Route::get('/insert', function(){
    $user = User::findOrFail(1);

    $post = new Post(["title"=>"PHP with Paul", "body"=>"New content with PHP 3"]);
    
    $user->posts()->save($post);
});

Route::get('/read', function(){
    $user = User::findOrFail(1);

    foreach($user->posts as $post){
        echo $post->body."<br>";
    }
    // return dd($user->posts);
});

Route::get("/update", function(){
    $user = User::findOrFail(1);
    $user->posts()->where("id", 1)->update(["title"=>"Hello 1", "body"=>"New content update!"]);
});

Route::get("/delete", function(){
    $user = User::findOrFail(1);
    $user->posts()->where("id", 1)->delete();
});