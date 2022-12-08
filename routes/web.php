<?php

use App\Http\Controllers\dataBarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('crud/welcome');
});
Route::resource('/data', databarangController::class);
