<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'1905021018',
            'nama'=>'Trisna Sari',
            'alamat'=>'Jalan Bukit Patas',
            'nohp'=>'085965900427',
            'email'=>'trisnasari18@undiksha.ac.id'
        );
        return view('admin.beranda', compact('title','data'));
    }
    public function dashboard(){
        $title="Data Dashboard";

        return view('admin.beranda', compact('title'));
    }
}