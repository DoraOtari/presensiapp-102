<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    function tampil() {
        return view('karyawan.tampil');
    }

    function buat() {
        $jabatan = DB::table('jabatan')->get();
        return view('karyawan.buat', compact('jabatan'));
    }

    function ubah() {
        return view('karyawan.ubah');
    }

    
}
