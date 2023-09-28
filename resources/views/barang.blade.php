@extends('layout')

@section('content')
    <h2 class="text-center mb-5 mt-3">Daftar Barang</h2>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>ID Supplier</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_barang as $item)
                    <tr>
                        <td>{{ $item->id_barang }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->id_supplier }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
