<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\add_school_controller;
use App\Http\Controllers\show_school_controller;

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

// Route::get('add_school',[add_school::class,'index']);
Route::view('add','add_school');
Route::post('add',[add_school_controller::class,'add_data']);

Route::get('show_school',[show_school_controller::class,'show']);