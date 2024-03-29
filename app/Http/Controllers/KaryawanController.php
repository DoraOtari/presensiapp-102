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
        return redirect('/profil');
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

        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required',
            'user_id' => 'required',
            'jabatan_id' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
        ]);

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

    function edit($id) {
        $karyawan = Karyawan::find($id);
        $jabatan = DB::table('jabatan')->get();
        return view('karyawan.ubah',[
            'karyawan' => $karyawan,
            'jabatan' => $jabatan
        ]);
    }

    function hapus($id) {
        Karyawan::destroy($id);
        return redirect('/karyawan')->with(
            'pesan','berhasil hapus data'
        );
    }

    function update($id, Request $request) {
        $karyawan = Karyawan::find($id);
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

        return redirect('/karyawan')->with('pesan','berhasil update karyawan');
    }
}