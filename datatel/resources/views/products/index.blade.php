@extends('layouts.app')

@section('title', 'Data Pelanggan')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Product</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Witel</th>
            <th>Ubis</th>
            <th>ID Number</th>
            <th>Nama Akun</th>
            <th>AM</th>
            <th>NIPNAS</th>
            <th>Nama Grup</th>
        </tr>
    </thead>
    <tbody>+
        @if($product->count() > 0)
            @foreach($product as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->witel }}</td>
                    <td class="align-middle">{{ $rs->ubis }}</td>
                    <td class="align-middle">{{ $rs->id_number }}</td>
                    <td class="align-middle">{{ $rs->nama_akun }}</td>
                    <td class="align-middle">{{ $rs->am }}</td>
                    <td class="align-middle">{{ $rs->nipnas }}</td>
                    <td class="align-middle">{{ $rs->nama_grup }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Data tidak ditemukan</td>
            </tr>
        @endif
    </tbody>
</table>
@endsection