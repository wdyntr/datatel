@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail Data</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama Universitas</label>
        <input type="text" name="nama_univ" class="form-control" placeholder="Nama Universitas"
            value="{{ $univ->nama_univ }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Status</label>
        <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $univ->status }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <input name="alamat" class="form-control" placeholder="Alamat" value="{{ $univ->alamat }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $univ->kecamatan }}"
            readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kabupaten</label>
        <input class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $univ->kabupaten }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">AM</label>
        <input type="text" name="am" class="form-control" placeholder="AM" value="{{ $univ->am }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Layanan Telkom</label>
        <input class="form-control" name="layanan_telkom" placeholder="layanan_telkom"
            value="{{ $univ->layanan_telkom }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $univ->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $univ->updated_at }}" readonly>
    </div>
</div>
@endsection