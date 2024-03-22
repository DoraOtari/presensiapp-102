@extends('tema.bootstrap')
@section('konten')
    <div class="row justify-content-center mt-5 px-3">
        <div class="col-lg-5">
            <h1>Welcome to Presensi</h1>
            <p>aplikasi ini membantu kamu memantau performa kehadiran mu semudah memantau kegiatan mantanmu. tidak bisa digunakan untuk selingkuh, kami tidak menyediakan fitur chat</p>
            <a href="{{ url('absen') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-camera"></i>
            </a>
        </div>
        <div class="col-lg-5">
            <img src="{{ asset('foto.jpg') }}"class="img-fluid" alt="ini gambar">
        </div>
    </div>
@endsection