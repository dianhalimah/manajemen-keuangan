<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ambil data max 10
        $data = Pengeluaran::paginate(10);
        //membuat variabel tampil yang diisi dengan data
        $tampil['data'] = $data;
        //tampilkan resources/views/pengeluaran/index.blade.php beserta variabel tampil
        return view("pengeluaran.index", $tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tampilkan resources/views/pengeluaran/create.blade.php
        return view("pengeluaran.create");
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
        'tanggal' => 'required|unique:pengeluarans',
        'nominal' => 'required',
        'keterangan' => 'required'
        ]);
        $data = Pengeluaran::create($request->all());
        return redirect()->route("pengeluaran.index")->with(
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
    public function show($pengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pengeluaran)
    {
        $data = Pengeluaran::findOrFail($pengeluaran);
        //tampilkan resources/views/pengeluaran/edit.blade.php
        return view("pengeluaran.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pengeluaran)
    {
        //validasi inputan
        $this->validate($request, [
        'tanggal' => 'required',
        'nominal' => 'required',
        'keterangan' => 'required'
        ]);
        $data = Pengeluaran::findOrFail($pengeluaran);
        $data->tanggal = $request->tanggal;
        $data->nominal = $request->nominal;
        $data->keterangan = $request->keterangan;
        $data->save();
    
        return redirect()->route("pengeluaran.index")->with(
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
    public function destroy($pengeluaran)
    {
        $data = Pengeluaran::findOrFail($pengeluaran);
        $data->delete();
    }
}