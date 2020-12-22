<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Address;

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
    $address = new Address(['name'=>'1017 S 400 E Saint George, UT 84770']);

    $user->address()->save($address);
});

Route::get('/update', function(){
    $address = Address::whereUserId(1)->first();
    $address->name = "North Pole";
    
    return $address->save();
});

Route::get('/read', function(){
    $address = Address::find(1);
    return $address->name;
});

Route::get('/delete', function(){
    $address = Address::find(1);
    $address->forceDelete();
});