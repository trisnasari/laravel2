<?php

namespace App\Http\Controllers;
use App\Models\Keluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keluarga=Keluarga::all();
        $title="Data Keluarga";
        return view('admin.berandakeluarga',compact('title','keluarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data Pegawai";
        return view('admin.inputkeluarga', compact('title'));
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
            'nama'  => 'required|unique:keluargas|max:255',
            'no_kk'          => 'required',
            'alamat'          => 'required',
            'dusun'           => 'required',
            'RT'       => 'required',
            'ekonomi'       => 'required'

        ], $messege);
        $validasi['user_id'] = Auth::id();
        Keluarga::create($validasi);
        return redirect('keluarga')->with('success', 'Data berhasil tersimpan');
    
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
        $keluarga = Keluarga::find($id);
        $title = "Edit Data keluarga";
        return view('admin.inputkeluarga', compact('title', 'keluarga'));
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
        $validasi = $request->validate([
            'nama'  => 'required|unique:keluargas|max:255',
            'no_kk'          => 'required',
            'alamat'          => 'required',
            'dusun'           => 'required',
            'RT'       => 'required',
            'ekonomi'       => 'required'

        ]);
        $validasi['user_id'] = Auth::id();
       Keluarga::where('id', $id)->update($validasi);
        return redirect('keluarga')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keluarga = Keluarga::find($id);
        if ($keluarga != null) {
            Keluarga::where('id', $id)->delete();
        }
        return redirect('keluarga')->with('success', 'Data berhasil tersimpan');
    }
}
