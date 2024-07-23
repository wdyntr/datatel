@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Add Data</h1>
<hr />
<form action="{{ route('faskes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="kode_puskesmas" class="form-control" placeholder="Kode Puskesmas">
        </div>
        <div class="col">
            <input type="text" name="kode_puskesmas2" class="form-control" placeholder="Kode Puskesmas 2">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama_puskes" class="form-control" placeholder="Nama Puskesmas">
        </div>
        <div class="col">
            <input type="text" name="treg" class="form-control" placeholder="Treg">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="witel" class="form-control" placeholder="Witel">
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
            <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="concat" class="form-control" placeholder="Concat">
        </div>
        <div class="col">
            <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan">
        </div>
        <div class="col">
            <input type="text" name="wilayah_kerja" class="form-control" placeholder="Wilayah Kerja">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="lat" class="form-control" placeholder="Lat">
        </div>
        <div class="col">
            <input type="text" name="lon" class="form-control" placeholder="Lon">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="lat_long" class="form-control" placeholder="Lat Long">
        </div>
        <div class="col">
            <input type="text" name="ketersediaan_jaringan_optik" class="form-control"
                placeholder="Ketersediaan Jaringan Optik">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="layanan_telkom" class="form-control" placeholder="Layanan Telkom">
        </div>
        <div class="col">
            <input type="text" name="kompetitor_eksisting" class="form-control" placeholder="Kompetitor Eksisting">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="rekomendasi" class="form-control"
                placeholder="Rekomendasi Infrastruktur yang Digunakan">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection