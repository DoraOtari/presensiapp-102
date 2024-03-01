<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{

    function profil() {
        return view('karyawan.profil');
    }

    function upload(Request $req) {
        User::where('id', Auth::user()->id)
                ->update(
                    [
                        'avatar' => $req->avatar->store('Profil'),
                    ]
                    );
        return redirect('/profil')->with('pesan', 'berhasil upload file');
    }

    function tampil() {
        $karyawan = Karyawan::all();
        return view('karyawan.tampil', compact('karyawan'));
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

        return redirect('/karyawan')->with('pesan','berhasil tambah karyawan');
    }
}
