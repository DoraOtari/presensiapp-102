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
                <div class="row">
                    <div class="mb-3 col">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                            <option selected disabled>--Pilih Satu--</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select class="form-select" name="jabatan" id="jabatan">
                            <option selected disabled>--Pilih Satu--</option>
                            @foreach ($jabatan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection
