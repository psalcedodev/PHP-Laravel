<?php

use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    $data = ['title'=>'Sup big boii', 'content'=>'testing mail system'];
    //return view('welcome');
    Mail::send('emails.mail', $data, function($message){
        $message->to('salcedo.paul92@gmail.com', 'Paul Salccccccedo')->subject('Whats Up boii');
    });
});

