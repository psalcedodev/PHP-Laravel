<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Tag;
use App\Taggable;
use App\Video;

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

Route::get('/createpost', function () {
    $post = Post::create(["name"=>"Second Post"]);
    $tag = Tag::find(2);
    $post->tags()->save($tag);
    $video = Video::create(["name"=>"video.mp4"]);
    $tag2 = Tag::find(3);
    $video->tags()->save($tag2);
});


Route::get('/read', function () {
    $post = Post::findOrFail(3);
  
    foreach($post->tags as $tag){
        return $tag;
    }
});



Route::get('/update', function () {
    $post = Post::findOrFail(3);
  
    foreach($post->tags as $tag){
        $tag->whereName('PHP')->update(["name"=>"Updated PHP"]);
    }
});

Route::get('/delete', function () {

    $post = Post::findOrFail(4);
    $post->where('id', 4)->delete();
    
});