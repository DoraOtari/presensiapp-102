@extends('tema.bootstrap')
@section('konten')
    @if (session('pesan'))
        <div class="alert alert-success col-10 mx-auto" role="alert">
            <strong>
                <i class="bi-bell"></i>    
            </strong> {{ session('pesan') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <section class="hstack">
                <h4 class="card-title"><i class="bi-people"></i> Data Karyawan</h4>
                <a href="{{ url('/karyawan/buat') }}" class="btn btn-dark ms-auto">
                    <i class="bi-plus"></i> Buat
                </a>
            </section>
            <hr>
            {{-- bs5-table-default berfungsi sebagai kode membuat tabel --}}
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Avatar</th>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($karyawan as $item)
                            <tr>
                                <td><img src="" alt="foto profil"></td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->jabatan->nama }}</td>
                                <td>{{ $item->user->email }}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
