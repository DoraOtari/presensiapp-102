@extends('tema.bootstrap')
@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="hstack">
                <a href="{{ url('/karyawan') }}" class=" btn btn-outline-dark me-2"><i class="bi-chevron-left"></i></a>
                <h4 class="card-title">Form update Karyawan</h4>
            </div>
            <hr>
            <form action='{{ url("/karyawan/$karyawan->id") }}' method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input value="{{ $karyawan->nama_lengkap }}" type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                        placeholder="masukan nama lengkap anda" />
                </div>
                <livewire:nik-otomatis :karyawan="$karyawan" />
                <div class="row">
                    <div class="mb-3 col">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                            <option selected disabled>--Pilih Satu--</option>
                            <option @selected($karyawan->jenis_kelamin == 'laki-laki') value="laki-laki">Laki-laki</option>
                            <option @selected($karyawan->jenis_kelamin == 'perempuan') value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select class="form-select" name="jabatan_id" id="jabatan">
                            <option selected disabled>--Pilih Satu--</option>
                            @foreach ($jabatan as $item)
                                <option @selected($karyawan->jabatan->id == $item->id) value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <livewire:api-daerah-indo :karyawan="$karyawan" />
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3" placeholder="masukan alamat lengkap">{{ $karyawan->alamat }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary float-end">
                    update
                </button>
            </form>
        </div>
    </div>
@endsection