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
        $users = DB::table('users')->get();
        return view('karyawan.buat', compact('users'));
    }

    function ubah() {
        return view('karyawan.ubah');
    }

    
}
