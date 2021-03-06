<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MineralsController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\FormController;
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
});
// Route::get('/minerals/search/{input}/{category}','App\Http\Controllers\MineralsController@search');
Route::resource('/minerals',MineralsController::class);
Route::resource('/specification',SpecificationController::class);
Route::resource('/form',FormController::class);
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/apps', [App\Http\Controllers\HomeController::class, 'apps'])->name('apps');
// Route::get('/account', [App\Http\Controllers\HomeController::class, 'account'])->name('account');
// Route::get('/help', [App\Http\Controllers\HomeController::class, 'help'])->name('help');
