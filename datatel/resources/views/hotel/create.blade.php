@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Add Data</h1>
<hr />
<form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama_akomodasi" class="form-control" placeholder="Nama Akomodasi">
        </div>
        <div class="col">
            <input type="text" name="klasifikasi" class="form-control" placeholder="Klasifikasi">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>
        <div class="col">
            <input type="text" name="no_telp" class="form-control" placeholder="No Telp">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="jumlah_kamar" class="form-control" placeholder="Jumlah Kamar">
        </div>
        <div class="col">
            <input type="text" name="jumlah_tempat_tidur" class="form-control" placeholder="Jumlah Tempat Tidur">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection