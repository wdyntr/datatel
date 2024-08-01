@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail Data</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama Bank</label>
        <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank" value="{{ $bank->nama_bank }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" rows="2" placeholder="Alamat"
            readonly>{{ $bank->alamat }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $bank->kecamatan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kabupaten/Kota</label>
        <input type="text" name="kabupaten/kota" class="form-control" placeholder="kabupaten/kota"
            value="{{ $bank->{'kabupaten/kota'} }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">AM</label>
        <input type="text" name="am" class="form-control" placeholder="AM" value="{{ $bank->am }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Layanan Telkom</label>
        <input class="form-control" name="layanan_telkom" placeholder="Layanan Telkom"
            value="{{ $bank->layanan_telkom }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $bank->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $bank->updated_at }}" readonly>
    </div>
</div>
@endsection