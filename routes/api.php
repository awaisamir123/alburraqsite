<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home','\App\Http\Controllers\API\HomeController@index');
Route::get('/portfolio/{category?}','\App\Http\Controllers\API\PortfolioController@index');
Route::get('/portfolio-detail/{title}/{id}','\App\Http\Controllers\API\PortfolioController@detail');
Route::get('/our-talent-showcase','\App\Http\Controllers\API\PortfolioController@talentsIndex');
Route::get('/talent-details/{id}','\App\Http\Controllers\API\PortfolioController@talentDetail');
Route::post('/message','\App\Http\Controllers\API\MessageController@message');
Route::get('/services', '\App\Http\Controllers\API\ServicesController@index');
Route::get('/service/{id}', '\App\Http\Controllers\API\ServicesController@detail');


