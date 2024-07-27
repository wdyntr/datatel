@extends('layouts.app')
    
@section('contents')
    <h1 class="mb-0">Edit Data</h1>
    <hr />
    <form action="{{ route('datapelanggan.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Witel</label>
                <input type="text" name="witel" class="form-control" placeholder="Witel" value="{{ $product->witel }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Ubis</label>
                <input type="text" name="ubis" class="form-control" placeholder="Ubis" value="{{ $product->ubis }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">ID Number</label>
                <input name="id_number" class="form-control" placeholder="ID Number" value="{{ $product->id_number }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Akun</label>
                <input type="text" class="form-control" name="nama_akun" placeholder="Nama Akun" value="{{ $product->nama_akun }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">AM</label>
                <input type="text" name="am" class="form-control" placeholder="AM" value="{{ $product->am }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">NIPNAS</label>
                <input class="form-control" name="nipnas" placeholder="NIPNAS" value="{{ $product->nipnas }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Grup</label>
                <input type="text" name="nama_grup" class="form-control" placeholder="Nama Grup" value="{{ $product->nama_grup }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection