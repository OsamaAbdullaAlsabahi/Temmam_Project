<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::get('/showHero_Home',[ShowDataController::class, 'showHero_Home']);
Route::get('/showhAbout_Us',[ShowDataController::class, 'showhAbout_Us']);
Route::get('/showfClients_Who_trust_Us',[ShowDataController::class, 'showfClients_Who_trust_Us']);
Route::get('/showfollow_Us',[ShowDataController::class, 'showfollow_Us']);
Route::get('/showHeader',[ShowDataController::class, 'showHeader']);
Route::get('/showSpecial_Service',[ShowDataController::class, 'showSpecial_Service']);
Route::get('/showAbout_Us',[ShowDataController::class, 'showAbout_Us']);
Route::get('/showHero_services',[ShowDataController::class, 'showHero_services']);
Route::get('/showservices',[ShowDataController::class, 'showservices']);
Route::get('/showRecent_Projects',[ShowDataController::class, 'showRecent_Projects']);
Route::get('/showUseful_Links',[ShowDataController::class, 'showUseful_Links']);
Route::get('/showWho_Are_we',[ShowDataController::class, 'showWho_Are_we']);
