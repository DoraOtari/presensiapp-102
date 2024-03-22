@extends('tema.bootstrap')
@section('konten')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Pukul Masuk</th>
                <th>Foto Masuk</th>
                <th>Lokasi Masuk</th>
                <th>Pukul Keluar</th>
                <th>Foto Keluar</th>
                <th>Lokasi Keluar</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($presensi as $item)
                <tr>
                    <td>{{ $item->tgl."-".$item->bln."-".$item->thn }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->pukul_masuk }}</td>
                    <td>
                        <img src="{{ asset('storage/'.$item->foto_masuk) }}" width="45">
                    </td>
                    <td>{{ $item->lokasi_masuk }}</td>
                    <td>{{ $item->pukul_keluar }}</td>
                    <td>
                        <img src="{{ asset('storage/'.$item->foto_keluar) }}" width="45">
                    </td>
                    <td>{{ $item->lokasi_keluar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection