@extends('tema.bootstrap')
@section('konten')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><i class="bi-people"></i> Data Karyawan</h4>
            <hr>
            {{-- bs5-table-default berfungsi sebagai kode membuat tabel --}}
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th>Column 3</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
