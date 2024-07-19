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
</table>
@endsection