<?php

use App\Data\Tabungan;
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

app()->singleton('tabungan', function(){
    return new App\Data\Tabungan();
});

Route::get('/', function () {
    return dd(app('tabungan'), app('tabungan'));
});
