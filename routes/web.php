<?php

use App\Http\Controllers\BikeController;
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

Route::get('/', [BikeController::class, 'homeView']);
Route::get('/insertBike', [BikeController::class, 'insertView']);
Route::post('/storeBike', [BikeController::class, 'store']);
Route::get('/updateBike/{id}', [BikeController::class, 'updateView']);
Route::put('/update/{id}', [BikeController::class, 'update']);
Route::delete('/delete/{id}', [BikeController::class, 'destroy']);


