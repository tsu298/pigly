<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiglyController;

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

Route::get('/weight_logs',[PiglyController::class,'index']);
Route::post('/weight_logs/create',[PiglyController::class,'weight']);