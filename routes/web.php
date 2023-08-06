<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\BlogDetailsController;
use App\Http\Controllers\frontend\ContantController;
use App\Http\Controllers\frontend\CredentialsController;
use App\Http\Controllers\frontend\Homecontroller;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\WorkController;
use App\Http\Controllers\frontend\WorkDetailsController;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Homecontroller::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/blog-details', [BlogController::class,'index']);
Route::get('/blog', [BlogDetailsControllerController::class,'index']);
Route::get('/contact', [ContantController::class,'index']);
Route::get('/credential', [CredentialsController::class,'index']);
Route::get('/service', [ServiceController::class,'index']);
Route::get('/works', [WorkController::class,'index']);
Route::get('/work-details', [WorkDetailsController::class,'index']);
