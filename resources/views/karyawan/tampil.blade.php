@extends('tema.bootstrap')
@section('konten')
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
