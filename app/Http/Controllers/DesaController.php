<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index(){
        $title="Selamat Datang di Desa Saya";
        return view('admin.beranda', compact('title'));
    }
}
