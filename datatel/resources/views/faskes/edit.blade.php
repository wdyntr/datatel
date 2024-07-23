@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Data</h1>
<hr />
<form action="{{ route('bank.update', $bank->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Bank</label>
            <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank"
                value="{{ $bank->nama_bank }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $bank->alamat }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $bank->kecamatan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kabupaten/Kota</label>
            <input type="text" name="kabupaten/kota" class="form-control" placeholder="kabupaten/kota"
                value="{{ $bank->{'kabupaten/kota'} }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">AM</label>
            <input type="text" name="am" class="form-control" placeholder="AM" value="{{ $bank->am }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Layanan Telkom</label>
            <input class="form-control" name="layanan_telkom" placeholder="Layanan Telkom"
                value="{{ $bank->layanan_telkom }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection