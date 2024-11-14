@extends('adminlte::page')

@section('title', 'List Produk')

@section('content_header')
    <h1 class="m-0 text-dark">List Produk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('products.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>No Barcode</th>
                            <th>Nama Produk</th>
                            <th>Stok</th>
                            <th>Deskripsi</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key => $products)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$products->no_barcode}}</td>
                                <td>{{$products->nama_produk}}</td>
                                <td>{{$products->stok}}</td>
                                <td>{{$products->deskripsi}}</td>
                                
                               
                                
                                <td>
                                    <a href="{{route('products.edit', $products)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('products.destroy', $products)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush
