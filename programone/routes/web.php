<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;
use App\Country;
use App\Photo;
use App\Tag;
use App\Video;
use App\Taggable;

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
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::resource('/posts', 'PostController');

Route::get('/dates', function () {
    

    
});

// /*
// |--------------------------------------------------------------------------
// | Application Routes
// |--------------------------------------------------------------------------
// */

// Route::get('/insert', function(){

//     DB::insert('INSERT INTO posts(title, content) values(?,?)', ['PHP With Laravel', 'PHP with Laravel is the best!']);


// });

// Route::get('/read', function(){
//     $results = DB::select("SELECT * FROM posts");
//     foreach($results as $result){
//         return $result->title;
       
//     }
//     if($results == 1){
//         echo 'Post created!';

//     }else{
//         echo 'Post not created!';
//     }
//     return $results;
// });

// Route::get('/update', function(){
//     $updated = DB::update('UPDATE posts set title = "Vue JS is bettersssssss?" WHERE id = ?', [1]);
//     return $updated;
// });

// Route::get('/delete', function(){
//     $delete = DB::delete("DELETE FROM posts WHERE id =?", [4]);
    
//     if($delete == 1){
//         echo 'Deleted!';
//     }else{
//         echo 'Not deleted<br>';
//     }
//     return $delete;
// });


// /*
// |--------------------------------------------------------------------------
// | Eloquent ORM
// |--------------------------------------------------------------------------
// */

// // Route::get('/find', function(){

// //     $posts = Post::all();
// //     forEach($posts as $post){
// //         return $post->title;
// //     }
// // });

// // Route::get('/find/{id}', function($id){

// //     $post = Post::where('id', 5)->orderBy('id', 'desc')->take(1)->get();
// //     return $post;
// //     // forEach($posts as $post){
// //     //     return $post->title;
// //     // }
// // });

// // Route::get('/findmore', function(){
// //     // $posts = Post::findOrFail(5);
// //     // return $posts;

// //     $posts = Post::where('title', '>=', 3)->firstOrFail();
// //     return $posts;
// // });


// // Route::get('/basicinsert', function(){
// //     $post = new Post;

// //     $post->title = 'new ORM Title insert';
// //     $post->content = "Wow content!";
// //     $post->save();
// // });


// // Route::get('/basicinsert', function(){
// //     $post = Post::find(3);

// //     $post->title = 'new ORM Title insert';
// //     $post->content = "Wow content!";
// //     $post->save();



// // });


// // Route::get('/about', function () {
// //     return 'Here\'s is the about page';
// // });

// // Route::get('/contact/{id}', function ($id) {
// //     return "Hello, ".$id;
// // });

// // Route::get('/admin/post/example', array('as' => 'admin.home', function(){

// //     $url = route('admin.home');
// //     return "This url is: ".$url;

// // }));

// // Route::get('/checking', '\App\Http\Controllers\HomeController@index'); 

// // Route::get('/post/{name}', "\App\Http\Controllers\PostController@index");

// // Route::resource('/posts', '\App\Http\Controllers\PostController');

// //Contact Page
// // Route::get('/contact', '\App\Http\Controllers\PostController@contact');

// //Custom Route
// // Route::get('post/{id}', '\App\Http\Controllers\PostController@show_post');

// Route::get("/create", function(){
//     Post::create(['title'=>'Create Method', 'content'=>'Wow Im learning a lot']);

// });

// Route::get("/update", function(){
//     Post::where('id', 3)->where('is_admin', 0)->update(['title'=>'New Title Test', 'content'=>'New Content Test']);
// });

// Route::get("/delete", function(){
//     Post::find(3)->delete();

// });

// Route::get("/delete2", function(){
//     Post::destroy([6,7]);

// });

// Route::get("/softdelete", function(){
//     Post::find(11)->delete();
// });

// Route::get("/readsoftdelete", function(){
//     // return Post::find(8);

//     // return Post::withTrashed()->where('id', 8)->get();

//     return Post::onlyTrashed()->get();

// });

// Route::get("/restoresoftdelete", function(){
//     Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get("/forcedelete", function(){
//     // Post::withTrashed()->where('id', 8)->forceDelete();
//     Post::onlyTrashed()->forceDelete();
// });


// /*
// |--------------------------------------------------------------------------
// | Eloquent Relationships
// |--------------------------------------------------------------------------
// */
// //One to one relationship
// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post->title;
// });

// //Inverse - One to one relationship
// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });

// //One to many
// Route::get('/posts/{id}', function($id){
//     $user = User::find(1);

//     foreach($user->posts as $post){
//         echo $post->title."<br>";
//     }
// });

// //Many to many relationship

// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id);

//     foreach($user->roles as $role){
//         return $role->name;
//     }

// });

// //Access the intermediate table
// Route::get('/user/pivot', function(){
//     $user = User::find(1);

//     foreach($user->roles as $role){
//         return $role->pivot->created_at;
//     }
// });

// Route::get('/user/country', function(){
//     $country = Country::find(2);
//     foreach($country->posts as $post){
//         return $post->title;
//     }
// });

// // Polymorphic Relations

// Route::get('/post/photo', function(){
//     $user = Post::find(1);
//     forEach($user->photos as $photo){
//         echo $photo->path."<br>";
//     }
// });

// Route::get('/post/photo', function(){
//     $user = Post::find(1);
//     forEach($user->photos as $photo){
//         echo $photo->path."<br>";
//     }
// });


// Route::get('/photo/{id}/post', function($id){
//     $photo = Photo::findOrFail($id);
//     return $photo->imageable;
// });

// //Polymorphic many to many

// Route::get('/post/tag', function(){
//     $post = Post::find(1);
//     foreach($post->tags as $tag){
//         return $tag->name;
//     }
// });

// Route::get('/user/tag', function(){
//     $tag = Tag::find(2);
//     foreach($tag->posts as $post){
//         echo $post->title;
//     }
// });

