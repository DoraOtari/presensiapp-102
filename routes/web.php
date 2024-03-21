<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/karyawan', [KaryawanController::class, 'tampil']);
Route::get('/karyawan/buat', [KaryawanController::class, 'buat']);
Route::post('/karyawan', [KaryawanController::class, 'simpan']);
Route::get('/profil', [KaryawanController::class, 'profil']);
Route::post('/karyawan/upload', [KaryawanController::class, 'upload']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::delete('/karyawan/{id}',[KaryawanController::class, 'hapus']);
Route::put('/karyawan/{id}', [KaryawanController::class,'update']);
Route::view('absen', 'absen_page');
Route::post('presensi', function () {
   $foto64 = request()->foto;
   $foto = explode(',',$foto64)[1];
   $nama_foto = uniqid().'.jpg';
   $lokasi_foto = 'Foto Absen/'.$nama_foto;
   $hasil_foto  = base64_decode($foto64);
    $waktu = date('d-m-Y');
    list($tgl, $bln, $thn) = explode('-', $waktu);

    if (request()->keterangan == 'masuk') {
        DB::table('kehadiran')->insert(
            [
                'user_id' => Auth::user()->id,
                'foto_masuk' => $lokasi_foto,
                'tgl' => $tgl,
                'bln' => $bln,
                'thn' => $thn,
                'pukul_masuk' => date('H.i'),
                'lokasi_masuk' => request()->lokasi,
            ]
            );
    } else {
        $karyawan = DB::table('kehadiran')->where('user_id', Auth::user()->id)->orderByDesc('id')->first();
        DB::table('kehadiran')->where('id', $karyawan->id)->where('tgl', $tgl)
        ->update(
            [
                'foto_keluar' => $lokasi_foto,
                'pukul_keluar' => date('H.i'),
                'lokasi_keluar' => request()->lokasi,
            ]
            );
    }
    Storage::put($lokasi_foto, $hasil_foto);
    return redirect('absen')->with('pesan', "berhasil absen ".request()->keterangan);;
});