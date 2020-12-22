<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Role;

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

Route::get('/insert/{name}', function($name){
    
    $user = User::findOrFail(1);
    $role = new Role(['name'=>$name]);
    $user->roles()->save($role);

});

Route::get("/read", function(){
    $user = User::findOrFail(1);
    dd($user);
    // foreach($user->roles as $role){
    //     dd($role);
    //     echo $role;
    // }

   
});

Route::get("/update", function(){
    $user = User::findOrFail(1);
    if($user->has('roles')){
        foreach($user->roles as $role){
            if($role->name == 'Admin'){
                $role->name = 'subscriber';
                $role->save();
            }

        }
    }
    // $user->roles()->where('id', 1)->update(["name"=>"Subscriber"]);

    // foreach($user->roles as $role){
    //     echo $role;
    // }
});

Route::get("/delete/{id}", function($id){
    $user = User::findOrFail(1);
    foreach($user->roles as $role){
        $role->where("id", $id)->delete();
    }
});

Route::get("/attach", function(){
    $user = User::findOrFail(1);
    $user->roles()->attach(2);
});

Route::get("/detach", function(){
    $user = User::findOrFail(1);
    $user->roles()->detach();
});

Route::get('/sync', function () {
    $user = User::findOrFail(1);
    $user->roles()->sync([3,4,5]);
});