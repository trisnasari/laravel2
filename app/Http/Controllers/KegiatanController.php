<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan=Kegiatan::all();
        $title="Data Kegiatan";
        return view('admin.berandakegiatan',compact('title','kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data Pegawai";
        return view('admin.inputkegiatan', compact('title'));
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
            'hari'  => 'required|max:255',
            'tanggal'          => 'required',
            'nama'          => 'required',
            'jam'           => 'required',
            'tempat'       => 'required'
        ], $messege);
        $validasi['user_id'] = Auth::id();
        Kegiatan::create($validasi);
        return redirect('kegiatan')->with('success', 'Data berhasil tersimpan');
    
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
        $kegiatan = Kegiatan::find($id);
        $title = "Edit Data kegiatan";
        return view('admin.inputkegiatan', compact('title', 'kegiatan'));
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
        ];

        $validasi = $request->validate([
            'hari'  => 'required|max:255',
            'tanggal'          => 'required',
            'nama'          => 'required',
            'jam'           => 'required',
            'tempat'       => 'required'
        ],$messege);
        $validasi['user_id'] = Auth::id();
       Kegiatan::where('id', $id)->update($validasi);
        return redirect('kegiatan')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        if ($kegiatan != null) {
            Kegiatan::where('id', $id)->delete();
        }
        return redirect('kegiatan')->with('success', 'Data berhasil tersimpan');
    }
}
