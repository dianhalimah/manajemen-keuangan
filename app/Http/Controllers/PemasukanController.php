<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemasukan;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ambil data max 10
        $data = Pemasukan::paginate(10);
        //membuat variabel tampil yang diisi dengan data
        $tampil['data'] = $data;
        //tampilkan resources/views/pemasukan/index.blade.php beserta variabel tampil
        return view("pemasukan.index", $tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tampilkan resources/views/pemasukan/create.blade.php
        return view("pemasukan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi inputan
        $this->validate($request, [
        'sumber_pemasukan' => 'required|unique:pemasukans',
        'nominal' => 'required',
        'tanggal' => 'required',
        'keterangan' => 'required'
        ]);
        $data = Pemasukan::create($request->all());
        return redirect()->route("pemasukan.index")->with(
        "success",
        "Data berhasil disimpan."
    );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pemasukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pemasukan)
    {
        $data = Pemasukan::findOrFail($pemasukan);
        //tampilkan resources/views/pemasukan/edit.blade.php
        return view("pemasukan.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pemasukan)
    {
        //validasi inputan
        $this->validate($request, [
        'sumber_pemasukan' => 'required',
        'nominal' => 'required',
        'tanggal' => 'required',
        'keterangan' => 'required'
        ]);
        $data = Pemasukan::findOrFail($pemasukan);
        $data->sumber_pemasukan = $request->sumber_pemasukan;
        $data->nominal = $request->nominal;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->save();
    
        return redirect()->route("pemasukan.index")->with(
        "success",
        "Data berhasil diubah."
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pemasukan)
    {
        $data = Pemasukan::findOrFail($pemasukan);
        $data->delete();
    }
}
