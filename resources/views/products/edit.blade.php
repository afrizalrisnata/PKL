
@extends('adminlte::page')

@section('title', 'Edit Produk')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Produk</h1>
@stop

@section('content')
    <form action="{{route('products.update', $product)}}" method="post">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputNoBarcode">No Barcode</label>
                            <input type="text" class="form-control @error('no_barcode') is-invalid @enderror" id="exampleInputNoBarcode" placeholder="No Barcode" name="no_barcode" value="{{ $product->no_barcode }}" required>
                            @error('no_barcode') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNamaProduk">Nama Produk</label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="exampleInputNamaProduk" placeholder="Nama Produk" name="nama_produk" value="{{ $product->nama_produk }}" required>
                            @error('nama_produk') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputStok">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="exampleInputStok" placeholder="Stok" name="stok" value="{{ $product->stok }}" required>
                            @error('stok') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDeskripsi">Deskripsi</label>
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleInputDeskripsi" placeholder="Deskripsi" name="deskripsi" value="{{ $product->deskripsi}}" required>
                            @error('deskripsi') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('products.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop




