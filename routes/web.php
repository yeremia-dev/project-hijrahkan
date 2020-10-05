<?php

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

Route::get('/', function () {
    return view('myhome');
})->name('home');

Route:: get('/menu', function (){
    return view('mymenu');
});

Route::prefix('menu')->group(function () {
    Route::get('motor', function () {
        return view('form.motor');
    });
    Route::get('mobil', function () {
        return view('form.mobil');
    });
    Route::get('kpr', function () {
        return view('form.kpr');
    });
    Route::get('goods', function () {
        return view('form.goods');
    });
});

Route::resource('data-user', 'DataUserController');

Route::get('/investasi', function (){
   return view('myinvestment');
});
Route::resource('investasi/info', 'InfoController');
//Route::get('/tessi', 'DataUserController@export');

Route::get('/tentang-kami', function (){
   return view('myabout');
});

//export to excell data user
Route::get('/excel22', 'DataUserController@export');

//export to excell data info lebih lanjut
Route::get('/excel23', 'InfoController@export');

Route::get('/tes', 'DataUserController@tessi');
