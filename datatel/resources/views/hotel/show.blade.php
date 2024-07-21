@extends('layouts.app')
    
@section('contents')
    <h1 class="mb-0">Detail Data</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Akomodasi</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $hotel->nama_akomodasi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Klasifikasi</label>
            <input type="text" name="klasifikasi" class="form-control" placeholder="Klasifikasi" value="{{ $hotel->klasifikasi }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input name="alamat" class="form-control" placeholder="Alamat" value="{{ $hotel->alamat }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">No Telp</label>
            <input type="text" class="form-control" name="no_telp" placeholder="No Telp" value="{{ $hotel->no_telp }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jumlah Kamar</label>
            <input type="text" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar" value="{{ $hotel->jumlah_kamar }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jumlah Tempat Tidur</label>
            <input class="form-control" name="jumlah_tempat_tidur" placeholder="jumlah_tempat_tidur" value="{{ $hotel->jumlah_tempat_tidur }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" value="{{ $hotel->kabupaten }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $hotel->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $hotel->updated_at }}" readonly>
        </div>
    </div>
@endsection