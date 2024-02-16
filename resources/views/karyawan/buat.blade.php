@extends('tema.bootstrap')
@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="hstack">
                <a href="{{ url('/karyawan') }}" class=" btn btn-outline-dark me-2"><i class="bi-chevron-left"></i></a>
                <h4 class="card-title">Form tambah Karyawan</h4>
            </div>
            <hr>
            <form action="{{ url('/karyawan') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                        placeholder="masukan nama lengkap anda" />
                </div>
                <livewire:nik-otomatis />
            </form>
        </div>
    </div>
@endsection
