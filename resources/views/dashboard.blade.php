@extends('tema.bootstrap')
@section('konten')
    <div class="row justify-content-center mt-5">
        <div class="col-5">
            <h1>Welcome to Presensi</h1>
            <p>aplikasi ini membantu kamu memantau performa kehadiran mu semudah memantau kegiatan mantanmu. tidak bisa digunakan untuk selingkuh, kami tidak menyediakan fitur chat</p>
            <button class="btn btn-primary btn-lg">
                <i class="bi bi-camera"></i>
            </button>
        </div>
        <div class="col-5">
            <img src="{{ asset('foto.png') }}" width="" alt="ini gambar">
        </div>
    </div>
@endsection