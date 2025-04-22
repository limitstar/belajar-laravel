<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class, 'index']);
Route::get('ambilfile', [HelloWorldController::class, 'ambilFile']);
Route::get('getlorem', [HtmlController::class, 'getLorem']);
Route::get('biodata', [HtmlController::class, 'bioData']);
Route::get('getform', [LatihanController::class, 'getForm']);
Route::get('gettabel', [LatihanController::class, 'getTabel']);
Route::resource('anggota', AnggotaController::class);