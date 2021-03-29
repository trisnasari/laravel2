<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = pegawai::all();
        $title = "Data Pegawai";
        return view('admin.pegawai', compact('title', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data Pegawai";
        return view('admin.inputpegawai', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messege = [
            'required' => 'Kolom :attribute Harus Lengkap',
            'date'     => 'Kolom :attribute Harus Tanggal',
            'numeric'  => 'Kolom :attribute Harus Angka',
        ];
        $validasi = $request->validate([
            'nama_pegawai'  => 'required|unique:pegawais|max:255',
            'alamat'          => 'required',
            'NIP'           => 'required',
            'Jabatan'       => 'required'
        ], $messege);
        $validasi['id_pegawai'] = Auth::id();
        pegawai::create($validasi);
        return redirect('pegawai')->with('success', 'Data berhasil tersimpan');
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
        $pegawai = pegawai::find($id);
        $title = "Edit Data Pegawai";
        return view('admin.inputpegawai', compact('title', 'pegawai'));
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
        $messege = [
            'required' => 'Kolom :attribute Harus Lengkap',
            'date'     => 'Kolom :attribute Harus Tanggal',
            'numeric'  => 'Kolom :attribute Harus Angka',
        ];
        $validasi = $request->validate([
            'nama_pegawai'  => 'required',
            'alamat'          => 'required',
            'NIP'           => 'required',
            'Jabatan'       => 'required'
        ], $messege);
        $validasi['id_pegawai'] = Auth::id();
        pegawai::where('id', $id)->update($validasi);
        return redirect('pegawai')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = pegawai::find($id);
        if ($pegawai != null) {
            pegawai::where('id', $id)->delete();
        }
        return redirect('pegawai')->with('success', 'Data berhasil tersimpan');
    }
}
