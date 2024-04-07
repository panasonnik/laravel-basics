<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('layout.app');
});
Route::get('/start', function () {
    return view('start');
})->name('start');

Route::get('/item/{id}', [MyController::class, 'getItem'])->name('item');
Route::get('/items', [MyController::class, 'getItems'])->name('items');
Route::post('/submit', [MyController::class, 'submit'])->name('submit');
