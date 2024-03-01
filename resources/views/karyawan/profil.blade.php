@extends('tema.bootstrap')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Upload Foto</h4>
            <hr>
            <form action="{{ url('karyawan/upload') }}" method="post">
                <livewire:upload-file />
                <button type="submit" class="btn btn-primary float-end">
                    <i class="bi-upload"></i> Upload
                </button>
            </form>
        </div>
    </div>
@endsection
