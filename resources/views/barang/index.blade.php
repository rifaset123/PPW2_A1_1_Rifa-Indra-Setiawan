@extends('layouts.app')

@section('content')
    <h1 align='center'>Data Barang</h1>

    <table style=" text-align: center;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>ID Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
                <tr>
                    <td>{{ $barang->id_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_supplier  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
