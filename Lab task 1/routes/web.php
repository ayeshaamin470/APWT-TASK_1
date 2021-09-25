<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'page1']);
Route::get('/product', [PagesController::class, 'page2']);
Route::get('/Our_teams', [PagesController::class, 'page3']);
Route::get('/aboutus', [PagesController::class, 'page4']);
Route::get('/contactus', [PagesController::class, 'page5']);
