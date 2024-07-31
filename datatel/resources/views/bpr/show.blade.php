@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail Data</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan"
            value="{{ $bpr->nama_pelanggan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Nama AM</label>
        <input type="text" name="nama_am" class="form-control" placeholder="NAma AM" value="{{ $bpr->nama_am }}"
            readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $bpr->alamat }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $bpr->kecamatan }}" readonly>
    </div>

</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kabupaten</label>
        <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" value="{{ $bpr->kabupaten }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Provinsi</label>
        <input class="form-control" name="provinsi" placeholder="Provinsi" value="{{ $bpr->provinsi }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Pelayanan</label>
        <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan" value="{{ $bpr->pelayanan }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Koordinat</label>
        <input class="form-control" name="koordinat" placeholder="Koordinat" value="{{ $bpr->koordinat }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Email PIC</label>
        <input type="text" name="email_pic" class="form-control" placeholder="Email PIC" value="{{ $bpr->email_pic }}"
            readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">No HP PIC</label>
        <input class="form-control" name="no_hp" placeholder="No HP PIC" value="{{ $bpr->no_hp }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Sosmed PIC</label>
        <input type="text" name="sosmed_pic" class="form-control" placeholder="Sosmed PIC"
            value="{{ $bpr->sosmed_pic }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tersedia Layanan</label>
        <input class="form-control" name="tersedia_layanan" placeholder="Tersedia Layanan"
            value="{{ $bpr->tersedia_layanan }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Status Berlangganan</label>
        <input class="form-control" name="status_berlangganan" placeholder="Status Berlangganan"
            value="{{ $bpr->status_berlangganan }}" readonly>
    </div>

    <div class="col mb-3">
        <label class="form-label">Jenis Layanan</label>
        <input name="jenis_layanan" class="form-control" placeholder="Jenis Layanan" readonly
            value="{{ $bpr->jenis_layanan }}">
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $bpr->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $bpr->updated_at }}" readonly>
    </div>
</div>
@endsection