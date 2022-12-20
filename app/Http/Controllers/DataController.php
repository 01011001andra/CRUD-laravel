<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = data::all();
        return view("data.index", compact(["data"]));
    }
}
