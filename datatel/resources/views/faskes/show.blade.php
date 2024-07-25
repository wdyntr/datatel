@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail Data</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kode Puskesmas</label>
        <input type="text" name="kode_puskesmas" class="form-control" placeholder="Kode Puskesmas"
            value="{{ $faskes->kode_puskesmas }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kode Puskesmas 2</label>
        <input type="text" name="kode_puskesmas2" class="form-control" placeholder="Kode Puskesmas 2"
            value="{{ $faskes->kode_puskesmas2 }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama Puskesmas</label>
        <input name="nama_puskes" class="form-control" placeholder="Nama Puskesmas" value="{{ $faskes->nama_puskes }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Treg</label>
        <input type="text" name="treg" class="form-control" placeholder="Treg" value="{{ $faskes->treg}}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Witel</label>
        <input type="text" name="witel" class="form-control" placeholder="Witel" value="{{ $faskes->witel }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <input class="form-control" name="alamat" placeholder="Alamat" value="{{ $faskes->alamat }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"
            value="{{ $faskes->kecamatan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kabupaten</label>
        <input class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $faskes->kabupaten }}" readonly>
    </div>
</div>


<div class="row">
    <div class="col mb-3">
        <label class="form-label">Concat</label>
        <input type="text" name="concat" class="form-control" placeholder="Concat" value="{{ $faskes->concat }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Provinsi</label>
        <input class="form-control" name="provinsi" placeholder="Provinsi" value="{{ $faskes->provinsi }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Pelayanan</label>
        <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan"
            value="{{ $faskes->pelayanan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Wilayah Kerja</label>
        <input class="form-control" name="wilayah_kerja" placeholder="Wilayah Kerja"
            value="{{ $faskes->wilayah_kerja }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Lat</label>
        <input type="text" name="lat" class="form-control" placeholder="Lat" value="{{ $faskes->lat }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Lon</label>
        <input class="form-control" name="lon" placeholder="Lon" value="{{ $faskes->lon }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Lat Lon</label>
        <input type="text" name="lat_long" class="form-control" placeholder="Lat Long" value="{{ $faskes->lat_long }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Ketersediaan Jaringan Optik</label>
        <input class="form-control" name="ketersediaan_jaringan_optik" placeholder="Ketersediaan Jaringan Optik"
            value="{{ $faskes->ketersediaan_jaringan_optik }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Layanan Telkom</label>
        <input type="text" name="layanan_telkom" class="form-control" placeholder="Layanan Telkom"
            value="{{ $faskes->layanan_telkom }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kompetitor Eksisting</label>
        <input class="form-control" name="kompetitor_eksisting" placeholder="Kompetitor Eksisting"
            value="{{ $faskes->kompetitor_eksisting }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Rekomendasi </label>
        <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi"
            value="{{ $faskes->rekomendasi }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $faskes->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $faskes->updated_at }}" readonly>
    </div>
</div>
@endsection