<?php

use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index'])->name('home.index');
Route::get('/portofolio', [MainController::class, 'portofolio'])->name('portofolio');
Route::match(['get','post'], '/contact-me', [MainController::class, 'contactMe'])->name('contact-me');
Route::get('/about-me', [MainController::class, 'aboutMe'])->name('about-me');


