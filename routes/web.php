<?php

use App\Http\Controllers\dataBarangController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('crud/welcome');
// });
// Route::get('/dashboard', function () {
//   return view('crud/dashboard');
// });
// Route::resource('/data', databarangController::class);

Route::get('/', function () {
  return view('data/welcome');
});
Route::get('/forgotpass', function () {
  return view('data/forgotpassword');
});
Route::get("/datas", [DataController::class, "index"]);
Route::get('/dashboard', function () {
  return view('data/dashboard');
});
Route::get("/datas/create", [DataController::class, "create"]);
Route::post("/datas/store", [DataController::class, "store"]);
Route::get("/datas/{id}/edit", [DataController::class, "edit"]);
Route::put("/datas/{id}", [DataController::class, "update"]);
Route::delete("/datas/{id}", [DataController::class, "destroy"]);
