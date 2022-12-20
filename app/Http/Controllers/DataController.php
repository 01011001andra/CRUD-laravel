<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = data::orderBy("id")->paginate(5);
        return view("data.index", compact(["data"]));
    }
    public function create()
    {
        return view('data.create');
    }
    public function store(Request $request)
    {
        data::create($request->except("_token"));
        return redirect("/datas");
    }
    public function edit($id)
    {
        $data = data::find($id);
        return view('data.edit', compact(["data"]));
    }
    public function update($id, Request $request)
    {
        $data = data::find($id);
        $data->update($request->except("_token"));
        return redirect("/datas");
    }
    public function destroy($id)
    {
        $data = data::find($id);
        $data->delete();
        return redirect("datas");
    }
}
