<?php

use App\Http\Controllers\dataBarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('crud/welcome');
});


Route::get('/data', [databarangController::class, "index"]);
Route::get('/data/create', [databarangController::class, "create"]);
