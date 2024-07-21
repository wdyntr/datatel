@extends('layouts.app')
    
@section('contents')
    <h1 class="mb-0">Edit HOtel</h1>
    <hr />
    <form action="{{ route('hotel.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Akomodasi</label>
                <input type="text" name="nama_akomodasi" class="form-control" placeholder="Nama" value="{{ $hotel->nama_akomodasi }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Klasifikasi</label>
                <input type="text" name="klasifikasi" class="form-control" placeholder="Klasifikasi" value="{{ $hotel->klasifikasi }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input name="alamat" class="form-control" placeholder="Alamat" value="{{ $hotel->alamat }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">No Telp</label>
                <input type="text" class="form-control" name="no_telp" placeholder="No Telp" value="{{ $hotel->no_telp }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jumlah Kamar</label>
                <input type="text" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar" value="{{ $hotel->jumlah_kamar }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Jumlah Tempat Tidur</label>
                <input class="form-control" name="jumlah_tempat_tidur" placeholder="jumlah_tempat_tidur" value="{{ $hotel->jumlah_tempat_tidur }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" value="{{ $hotel->kabupaten }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection