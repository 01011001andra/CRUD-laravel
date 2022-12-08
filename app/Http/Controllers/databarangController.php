<?php

namespace App\Http\Controllers;

use App\Models\databarang;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class dataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = databarang::orderBy("kode")->paginate(5);
        return view("crud.index")->with("data", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("crud.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "kode" => "required|numeric|unique:data_barang,kode",
            "nama" => "required",
            "jenis" => "required",
            "stock" => "required|numeric",
        ], [
            "kode.required" => "Kode wajib diisi",
            "nama.required" => "Nama Barang wajib diisi",
            "jenis.required" => "Jenis wajib diisi",
            "stock.required" => "Stock wajib diisi",
        ]);
        $data = [
            'kode' => $request->kode,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'stock' => $request->stock,
        ];
        databarang::create($data);
        return redirect()->to("data")->with("success", "Berhasil Menambahkan Data");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = databarang::where("kode", $id)->first();
        return view("crud.edit")->with("data", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nama" => "required",
            "jenis" => "required",
            "stock" => "required|numeric",
        ], [
            "nama.required" => "Nama Barang wajib diisi",
            "jenis.required" => "Jenis wajib diisi",
            "stock.required" => "Stock wajib diisi",
        ]);
        $data = [
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'stock' => $request->stock,
        ];
        databarang::where("kode", $id)->update($data);
        return redirect()->to("data")->with("success", "Berhasil Mengupdate Data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        databarang::where("kode", $id)->delete();
        return redirect()->to("data")->with("success", "Berhasil Menghapus Data");
    }
}
