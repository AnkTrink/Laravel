<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestControler;
use App\Http\Controllers\HomeController;

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
Route::get('/','HomeController@showWelcome');

//Route::get('/', function () {
////    return 'Welcome Home by Nguyen Quang Anh!';
//    return view('welcome');
//});

Route::get('profile/{name}','App\Http\Controllers\ProfileController@showProfile');

Route::get('about','App\Http\Controllers\AboutController@showWDetails');
Route::get('about/{theSubject}', 'App\Http\Controllers\AboutController@showSubject');

Route::get('about','App\Http\Controllers\AboutController@showDetails');

Route::get('about', function () {
    return 'About Content';
});

//Route::get('about/directions', function () {
//    return 'Directions go here';
//});
//
//Route::any('submit-form', function(){
//    return 'Process Form';
//});
//
//Route::get('about/{theSubject}', function ($theSubject){
//    return $theSubject. ' content goes here';
//});
//
//Route::get('about/haha/{Art}/{Price}', function($Art, $Price){
//    return "The Product: $Art and $Price";
//});


//Route::get('/showWelcome', [HomeController::class, 'showWelcome']);
//Route::get('/user/{id}', [TestController::class, 'show']);

