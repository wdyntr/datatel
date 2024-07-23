@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Add Data</h1>
<hr />
<form action="{{ route('bank.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank">
        </div>
        <div class="col">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
        </div>
        <div class="col">
            <input type="text" name="kabupaten/kota" class="form-control" placeholder="Kabupaten/Kota">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="am" class="form-control" placeholder="AM">
        </div>
        <div class="col">
            <input type="text" name="layanan_telkom" class="form-control" placeholder="Layanan Telkom">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection