<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/tin-tuc', function () {
    return view('news');
});

Route::get('/bai-thuoc-tam-la-cua-nguoi-dao', function () {
    return view('blog.tam-la');
});

Route::get('/tip-tri-dut-diem-dau-co-vai-gay', function () {
    return view('blog.tri-vai-gay');
});

Route::get('/tri-lieu-be-co-xuong-khop', function () {
    return view('blog.be-xuong-khop');
});
