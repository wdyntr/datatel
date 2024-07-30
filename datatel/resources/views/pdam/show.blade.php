@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail Data</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $wisata_lamsel->nama }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Lokasi</label>
        <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" value="{{ $wisata_lamsel->lokasi }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Tikor</label>
        <input type="text" name="tikor" class="form-control" placeholder="Lokasi" value="{{ $wisata_lamsel->tikor }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Sudah Berlangganan/Belum</label>
        <input name="berlangganan" class="form-control" placeholder="Sudah Berlangganan/Belum"
            value="{{ $wisata_lamsel->berlangganan }}" readonly>
    </div>
    
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Email/Sosmed</label>
        <input type="text" name="email_sosmed" class="form-control" placeholder="Email/Sosmed"
            value="{{ $wisata_lamsel->email_sosmed }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Jenis Layanan</label>
        <input class="form-control" name="jenis_layanan" placeholder="jenis_layanan" value="{{ $wisata_lamsel->jenis_layanan }}"
            readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $wisata_lamsel->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $wisata_lamsel->updated_at }}" readonly>
    </div>
</div>
@endsection