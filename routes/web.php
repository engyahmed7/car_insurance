<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PackController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
})->name('welcome');
//Car Routes
Route::get('/cars/index', [CarController::class, 'index'])->name('cars.index')->middleware('auth');
Route::get('/cars/create{pack_id}', [CarController::class, 'create'])->name('cars.create')->middleware('auth');
Route::get('/cars/{cars}',[CarController ::class,'show'])->name('cars.show')->middleware('auth');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store')->middleware('auth');
Route::get('/cars/{cars}/delete',[CarController ::class,'delete'])->name('cars.delete')->middleware('auth');
Route::get('/cars/update/{cars}',[CarController ::class,'updateView'])->name('cars.update')->middleware('auth');
Route::get('/cars/updates/changeValue',[CarController ::class,'makeUpdate'])->name('cars.updates')->middleware('auth');


//Auth Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//List Routes
Route::get('/pack', [PackController::class, 'packindex'])->name('pack.packList')->middleware('auth');


//About
Route::get('/about', function () {
    return view('about');
})->name('about')->middleware('auth');


//Services
Route::get('/services', function () {
    return view('services');
})->name('services')->middleware('auth');


//Coverage
Route::get('/coverage', function () {
    return view('coverage');
})->name('coverage')->middleware('auth');
