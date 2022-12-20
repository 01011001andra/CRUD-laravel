<?php

use App\Http\Controllers\dataBarangController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('crud/welcome');
});
Route::get('/dashboard', function () {
  return view('crud/dashboard');
});
Route::resource('/data', databarangController::class);

Route::get("/datas", [DataController::class, "index"]);
Route::get("/datas/create", [DataController::class, "create"]);
Route::post("/datas/store", [DataController::class, "store"]);
