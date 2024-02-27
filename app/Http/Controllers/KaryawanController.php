<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
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

    function simpan(Request $request) {
        $karyawan = new Karyawan;
        $karyawan->nama_lengkap     = $request->nama_lengkap;
        $karyawan->nik              = $request->nik;
        $karyawan->user_id          = $request->user_id;
        $karyawan->jabatan_id       = $request->jabatan_id;
        $karyawan->tanggal_lahir    = $request->tanggal_lahir;
        $karyawan->jenis_kelamin    = $request->jenis_kelamin;
        $karyawan->provinsi         = $request->provinsi;
        $karyawan->kota             = $request->kota;
        $karyawan->alamat           = $request->alamat;
        $karyawan->save();

        return redirect('/karyawan');
    }
}
