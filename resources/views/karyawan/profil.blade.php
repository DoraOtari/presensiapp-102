@extends('tema.bootstrap')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Upload Foto</h4>
            <hr>
            <form action="{{ url('karyawan/upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="avatar" class="form-label">Pilih File</label>
                    <input type="file" class="form-control" name="avatar" />
                </div>
                <button type="submit" class="btn btn-primary float-end">
                    <i class="bi-upload"></i> Upload
                </button>
            </form>
        </div>
    </div>
@endsection
