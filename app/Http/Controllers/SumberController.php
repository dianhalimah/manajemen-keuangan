<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sumber;

class SumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ambil data max 10
        $data = Sumber::paginate(10);
        //membuat variabel tampil yang diisi dengan data
        $tampil['data'] = $data;
        //tampilkan resources/views/sumber/index.blade.php beserta variabel tampil
        return view("sumber.index", $tampil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //tampilkan resources/views/sumber/create.blade.php
        return view("sumber.create");
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
        'nama' => 'required|unique:sumbers',
        'keterangan' => 'required'
        ]);
        $data = Sumber::create($request->all());
        return redirect()->route("sumber.index")->with(
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
    public function show($sumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sumber)
    {
        $data = Sumber::findOrFail($sumber);
        //tampilkan resources/views/sumber/edit.blade.php
        return view("sumber.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sumber)
    {
        //validasi inputan
        $this->validate($request, [
        'nama' => 'required',
        'keterangan' => 'required'
        ]);
        $data = Sumber::findOrFail($sumber);
        $data->nama = $request->nama;
        $data->keterangan = $request->keterangan;
        $data->save();
    
        return redirect()->route("sumber.index")->with(
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
    public function destroy($sumber)
    {
        $data = Sumber::findOrFail($sumber);
        $data->delete();
    }
}
