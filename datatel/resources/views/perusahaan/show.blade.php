@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Detail Data</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $perusahaan->nama }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $perusahaan->alamat }}"
            readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"
            value="{{ $perusahaan->kecamatan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Kebupaten</label>
        <input name="kabupaten" class="form-control" placeholder="Kabupaten" value="{{ $perusahaan->kabupaten }}"
            readonly>
    </div>

</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Provinsi</label>
        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi"
            value="{{ $perusahaan->provinsi }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Pelayanan</label>
        <input class="form-control" name="pelayanan" placeholder="Pelayanan" value="{{ $perusahaan->pelayanan }}"
            readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Titik Koordinat</label>
        <input type="text" name="titik_koordinat" class="form-control" placeholder="Titik Koordinat"
            value="{{ $perusahaan->titik_koordinat }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Sudah Berlangganan/Belum</label>
        <input class="form-control" name="berlangganan" placeholder="Sudah Berlangganan/Belum"
            value="{{ $perusahaan->berlangganan }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">No Telp/HP PIC</label>
        <input type="text" name="no_telp" class="form-control" placeholder="No Telp/HP PIC"
            value="{{ $perusahaan->no_telp }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Jenis Layanan</label>
        <input class="form-control" name="jenis_layanan" placeholder="Jenis Layanan"
            value="{{ $perusahaan->jenis_layanan }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Status Berlangganan</label>
        <input type="text" name="status_berlangganan" class="form-control" placeholder="Status Berlangganan"
            value="{{ $perusahaan->status_berlangganan }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Tersedia Layanan</label>
        <input class="form-control" name="tersedia_layanan" placeholder="Tersedia Layanan"
            value="{{ $perusahaan->tersedia_layanan }}" readonly>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Sosmed/Email PIC</label>
        <input class="form-control" name="sosmed_email_pic" placeholder="Sosmed/Email PIC"
            value="{{ $perusahaan->sosmed_email_pic }}" readonly>
    </div>

    <div class="col mb-3">
        <label class="form-label">Keterangan</label>
        <textarea name="ket" class="form-control" placeholder="Keterangan" rows="3"
            readonly>{{ old('ket', $perusahaan->ket) }}</textarea>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $perusahaan->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $perusahaan->updated_at }}" readonly>
    </div>
</div>
@endsection