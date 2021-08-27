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
Route::get('/check-lotto', [Controller::class, 'rewardlotto'])->name('Landingpage.rewardlotto');
Route::get('/promotion', [Controller::class, 'promotion'])->name('Landingpage.promotion');
Route::get('/contact', [Controller::class, 'contact'])->name('Landingpage.contact');
Route::get('/register', [Controller::class, 'register'])->name('Landingpage.register');

Route::get('/กติกา/หวยรัฐบาลไทย',function() {
    return view('page.role.thai');
})->name(('role.thai'));

Route::get('/กติกา/หวยธกส.',function() {
    return view('page.role.bacc');
})->name(('role.bacc'));

Route::get('/กติกา/หวยออมสิน',function() {
    return view('page.role.gsb');
})->name(('role.gsb'));
Route::get('/กติกา/หวยลาว',function() {
    return view('page.role.laos');
})->name(('role.laos'));
Route::get('/กติกา/หวยฮานอย',function() {
    return view('page.role.hanoy');
})->name(('role.hanoy'));
Route::get('/กติกา/หวยมาเลย์',function() {
    return view('page.role.malay');
})->name(('role.malay'));
Route::get('/กติกา/หวยยี่กี่',function() {
    return view('page.role.yeekee');
})->name(('role.yeekee'));
Route::get('/กติกา/หวยปิงปอง',function() {
    return view('page.role.pingpong');
})->name(('role.pingpong'));
Route::get('/กติกา/หวยหุ้นสิงคโปร์',function() {
    return view('page.role.stocksinggapore');
})->name(('role.stocksinggapore'));
Route::get('/กติกา/หวยหุ้นไทย',function() {
    return view('page.role.stockthai');
})->name(('role.stockthai'));
Route::get('/กติกา/หวยหุ้นนิเคอิ',function() {
    return view('page.role.stocknikkei');
})->name(('role.stocknikkei'));
Route::get('/กติกา/หวยหุ้นจีน',function() {
    return view('page.role.stockchina');
})->name(('role.stockchina'));
Route::get('/กติกา/หวยหุ้นฮั่งเส็ง',function() {
    return view('page.role.stockhangseng');
})->name(('role.stockhangseng'));
Route::get('/กติกา/หวยหุ้นเกาหลี',function() {
    return view('page.role.stockkorea');
})->name(('role.stockkorea'));
Route::get('/กติกา/หวยหุ้นไต้หวัน',function() {
    return view('page.role.stocktaiwan');
})->name(('role.stocktaiwan'));
Route::get('/กติกา/หวยหุ้นอินเดีย',function() {
    return view('page.role.stockindia');
})->name(('role.stockindia'));
Route::get('/กติกา/หวยหุ้นเยอรมัน',function() {
    return view('page.role.stockgerman');
})->name(('role.stockgerman'));
Route::get('/กติกา/หวยหุ้นอังกฤษ',function() {
    return view('page.role.stockeng');
})->name(('role.stockeng'));
Route::get('/กติกา/หวยหุ้นดาวโจนส์',function() {
    return view('page.role.stockdownjones');
})->name(('role.stockdownjones'));
Route::get('/กติกา/หวยหุ้นรัสเซีย',function() {
    return view('page.role.stockrussia');
})->name(('role.stockrussia'));
Route::get('/กติกา/หวยหุ้นอียิปต์',function() {
    return view('page.role.stockegypt');
})->name(('role.stockegypt'));
