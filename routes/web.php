<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/user', function () {
    return view('index_user');
})->name('user');
Route::get('user_xem_san_pham', function () {
    return view('xem_san_pham');
})->name('user_xem_san_pham');
Route::get('user_xem_gio_hang', function () {
    return view('xem_gio_hang');
})->name('user_xem_gio_hang');
Route::get('user_thanh_toan', function () {
    return view('thanh_toan');
})->name('user_thanh_toan');