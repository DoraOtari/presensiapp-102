<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    function tampil() {
        return view('karyawan.tampil');
    }

    function buat() {
        return view('karyawan.buat');
    }

    function ubah() {
        return view('karyawan.ubah');
    }

    
}
