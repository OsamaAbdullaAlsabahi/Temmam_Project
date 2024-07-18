<?php

use App\Http\Controllers\ContactUsController;
use App\Admin\Controllers\PostesController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ShowDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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
    return view('home');
});



Route::get('/call_center', function () {
    

    return view('call_center');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/service', function () {

    return view('service');
});

Route::get('/home', function () {

    return view('home');
});


Route::post('/contact',[ContactUsController::class, 'saveContactUs']);

// Route::get('/home',[HomePageController::class, 'showWho_Are_we']);
// Route::get('/home',[HomePageController::class, 'showUseful_Links']);
// Route::get('/home',[HomePageController::class, 'showRecent_Projects']);
// Route::get('/home',[HomePageController::class, 'showservices']);
// Route::get('/home',[HomePageController::class, 'showHero_services']);
// Route::get('/home',[HomePageController::class, 'showAbout_Us']);
// Route::get('/home',[HomePageController::class, 'showSpecial_Service']);
// Route::get('/home',[HomePageController::class, 'showHero_Home']);
// Route::get('/home',[HomePageController::class, 'showHeader']);
// Route::get('/home',[HomePageController::class, 'showfollow_Us']);
// Route::get('/home',[HomePageController::class, 'showfClients_Who_trust_Us']);
// Route::get('/home',[HomePageController::class, 'showhAbout_Us']);



// Route::get('/',[HomePageController::class, 'showhAbout_Us']);
// Route::get('/',[HomePageController::class, 'showfClients_Who_trust_Us']);
// Route::get('/',[HomePageController::class, 'showfollow_Us']);
// Route::get('/',[HomePageController::class, 'showHeader']);
// Route::get('/home',[TestController::class, 'TestController']);
// Route::get('/', 'PostesController@index');//->name('user');
// Route::get('/home', 'ShowDataController@index');//->name('user');
// Route::get('/',[HomePageController::class, 'showSpecial_Service']);
// Route::get('/',[HomePageController::class, 'showAbout_Us']);
// Route::get('/',[HomePageController::class, 'showHero_services']);
// Route::get('/',[HomePageController::class, 'showservices']);
// Route::get('/',[HomePageController::class, 'showRecent_Projects']);
// Route::get('/',[HomePageController::class, 'showUseful_Links']);
// Route::get('/',[HomePageController::class, 'showWho_Are_we']);