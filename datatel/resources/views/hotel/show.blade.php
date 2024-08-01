@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail Data</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" name="kategori" class="form-control" placeholder="Kategori" value="{{ $hotel->kategori }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan"
            value="{{ $hotel->nama_pelanggan }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama AM</label>
        <input name="nama_am" class="form-control" placeholder="Nama AM" value="{{ $hotel->nama_am }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" rows="2" placeholder="Alamat"
            readonly>{{ $hotel->alamat }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $hotel->kecamatan }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kebupaten</label>
        <input class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $hotel->kabupaten }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Provinsi</label>
        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" value="{{ $hotel->provinsi }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Pelayanan</label>
        <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan" value="{{ $hotel->pelayanan }}"
            readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Koordinat</label>
        <input type="text" name="koordinat" class="form-control" placeholder="Koordinat" value="{{ $hotel->koordinat }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Email PIC</label>
        <input type="text" name="email_pic" class="form-control" placeholder="Email PIC" value="{{ $hotel->email_pic }}"
            readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Sosmed PIC</label>
        <input type="text" name="sosmed_pic" class="form-control" placeholder="Sosmed PIC"
            value="{{ $hotel->sosmed_pic }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">No HP PIC</label>
        <input type="text" name="no_hp" class="form-control" placeholder="No HP PIC" value="{{ $hotel->no_hp }}"
            readonly>
    </div>

</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Tersedia Layanan</label>
        <input type="text" name="tersedia_layanan" class="form-control" placeholder="Tersedia Layanan"
            value="{{ $hotel->tersedia_layanan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Status Berlangganan</label>
        <input type="text" name="status_berlangganan" class="form-control" placeholder="Status Berlangganan"
            value="{{ $hotel->status_berlangganan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Jenis Layanan</label>
        <input type="text" name="jenis_layanan" class="form-control" placeholder="Jenis Layanan"
            value="{{ $hotel->jenis_layanan }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $hotel->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $hotel->updated_at }}" readonly>
    </div>
</div>
@endsection