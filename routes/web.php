<?php

use App\Http\Controllers\dataBarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('crud/welcome');
});
Route::get('/dashboard', function () {
  return view('crud/dashboard');
});
// Route::resource('/data', databarangController::class);
Route::get('/data', [databarangController::class, "index"]);
