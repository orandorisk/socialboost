@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Harga</h1>
        </div>

        <div class="section-body">
            
        <div class="container-fluid">
            <table class="footable table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Minimal Pesanan</th>
                        <th scope="col">Maksimal Pesanan</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                        <tr>
                            <td>{{ $list['nama'] }}</td>
                            <td>{{ $list['harga'] }}</td>
                            <td>{{ $list['min_pesan'] }}</td>
                            <td>{{ $list['max_pesan'] }}</td>
                            <td>{{ $list['deskripsi'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
    </section>
@endsection
