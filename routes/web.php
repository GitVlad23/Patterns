<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FundamentalPatternsController;
use App\Http\Controllers\CreationalPatternsController;

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

Route::get('/fundamentals/property-container', [FundamentalPatternsController::class, 'PropertyContainer']);
Route::get('/fundamentals/delegation', [FundamentalPatternsController::class, 'Delegation']);
Route::get('/fundamentals/event-channel', [FundamentalPatternsController::class, 'EventChannel']);


Route::get('/creational/abstract-factory', [CreationalPatternsController::class, 'AbstractFactory']);