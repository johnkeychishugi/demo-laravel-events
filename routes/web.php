<?php

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
use App\Event;

Route::get('/', function () {

	$e = Event::first();
	$e->price = 20;
	$e->save(); 
  $events = Event::all();

   return view('events.index',compact('events'));
});

Route::get('/home',function(){
	return view('events.home');
});

Route::get('/help',function(){
	return view('events.help');
});