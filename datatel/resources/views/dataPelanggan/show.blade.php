@extends('layouts.app')
  
@section('title', 'Show Data')
  
@section('contents')
    <h1 class="mb-0">Detail Data</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Witel</label>
            <input type="text" name="witel" class="form-control" placeholder="Witel" value="{{ $product->witel }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Ubis</label>
            <input type="text" name="ubis" class="form-control" placeholder="Ubis" value="{{ $product->ubis }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ID Number</label>
            <input name="id_number" class="form-control" placeholder="ID Number" value="{{ $product->id_number }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Akun</label>
            <input type="text" class="form-control" name="nama_akun" placeholder="Nama Akun" value="{{ $product->nama_akun }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">AM</label>
            <input type="text" name="am" class="form-control" placeholder="AM" value="{{ $product->am }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIPNAS</label>
            <input class="form-control" name="nipnas" placeholder="NIPNAS" value="{{ $product->nipnas }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Grup</label>
            <input type="text" name="nama_grup" class="form-control" placeholder="Nama Grup" value="{{ $product->nama_grup }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection