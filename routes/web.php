<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'index'])->name('Landingpage.index');
Route::get('/rewardlotto', [Controller::class, 'rewardlotto'])->name('Landingpage.rewardlotto');
Route::get('/promotion', [Controller::class, 'promotion'])->name('Landingpage.promotion');
Route::get('/contract', [Controller::class, 'contract'])->name('Landingpage.contract');
