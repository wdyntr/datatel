@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail Data</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" name="kategori" class="form-control" placeholder="Nama" value="{{ $pdam->kategori }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" class="form-control" placeholder="Lokasi" value="{{ $pdam->nama_pelanggan }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama AM</label>
        <input type="text" name="nama_am" class="form-control" placeholder="Lokasi" value="{{ $pdam->nama_am }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <input name="alamat" class="form-control" placeholder="Alamat"
            value="{{ $pdam->alamat }}" readonly>
    </div>
    
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"
            value="{{ $pdam->kecamatan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kabupaten</label>
        <input class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $pdam->kabupaten }}"
            readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Concat</label>
        <input type="text" name="concat" class="form-control" placeholder="Concat"
            value="{{ $pdam->concat }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Provinsi</label>
        <input class="form-control" name="provinsi" placeholder="Provinsi" value="{{ $pdam->provinsi }}"
            readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Pelayanan</label>
        <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan"
            value="{{ $pdam->pelayanan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Koordinat</label>
        <input class="form-control" name="koordinat" placeholder="Kabupaten" value="{{ $pdam->koordinat }}"
            readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Email PIC</label>
        <input type="text" name="email_pic" class="form-control" placeholder="Email PIC"
            value="{{ $pdam->email_pic }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">No HP PIC</label>
        <input class="form-control" name="no_hp_pic" placeholder="Kabupaten" value="{{ $pdam->no_hp_pic }}"
            readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Sosmed PIC</label>
        <input class="form-control" name="sosmed_pic" placeholder="Sosmed PIC" value="{{ $pdam->sosmed_pic }}"
            readonly>
    </div>

    <div class="col mb-3">
        <label class="form-label">Ketersediaan Layanan</label>
        <input class="form-control" name="tersedia_layanan" placeholder="Ketersediaan Layanan" value="{{ $pdam->tersedia_layanan }}"
            readonly>
    </div>
</div>

<div class="row">
    <div   div class="col mb-3">
        <label class="form-label">Status Berlangganan</label>
        <input class="form-control" name="status_berlangganan" placeholder="Status Berlangganan" value="{{ $pdam->status_berlangganan }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Jenis Layanan</label>
        <input class="form-control" name="jenis_layanan" placeholder="Jenis Layanan" value="{{ $pdam->jenis_layanan }}"
            readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $pdam->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $pdam->updated_at }}" readonly>
    </div>
</div>
@endsection