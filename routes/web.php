<?php

use App\Http\Controllers\dataBarangController;
use Illuminate\Support\Facades\Route;


Route::resource('/data', databarangController::class);
