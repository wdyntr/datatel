@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Add Data</h1>
<hr />
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
<form action="{{ route('datapelanggan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="witel" class="form-control" placeholder="Witel">
        </div>
        <div class="col">
            <input type="text" name="ubis" class="form-control" placeholder="Ubis">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="id_number" class="form-control" placeholder="ID Number">
        </div>
        <div class="col">
            <input type="text" name="nama_akun" class="form-control" placeholder="Nama Akun">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="am" class="form-control" placeholder="AM">
        </div>
        <div class="col">
            <input type="text" name="nipnas" class="form-control" placeholder="NIPNAS">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama_grup" class="form-control" placeholder="Nama Grup">
        </div>
        <!-- <div class="col">
            <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
        </div> -->
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection