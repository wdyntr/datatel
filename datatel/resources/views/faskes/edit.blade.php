@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Data</h1>
<hr />
<form action="{{ route('faskes.update', $faskes->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode Puskesmas</label>
            <input type="text" name="kode_puskesmas" class="form-control" placeholder="Kode Puskesmas"
                value="{{ $faskes->kode_puskesmas }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kode Puskesmas 2</label>
            <input type="text" name="kode_puskesmas2" class="form-control" placeholder="Kode Puskesmas 2"
                value="{{ $faskes->kode_puskesmas2 }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Puskesmas</label>
            <input name="nama_puskes" class="form-control" placeholder="Nama Puskesmas"
                value="{{ $faskes->nama_puskes }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Treg</label>
            <input type="text" name="treg" class="form-control" placeholder="Treg" value="{{ $faskes->treg}}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Witel</label>
            <input type="text" name="witel" class="form-control" placeholder="Witel" value="{{ $faskes->witel }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input class="form-control" name="alamat" placeholder="Alamat" value="{{ $faskes->alamat }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"
                value="{{ $faskes->kecamatan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kabupaten</label>
            <input class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $faskes->kabupaten }}">
        </div>
    </div>


    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Concat</label>
            <input type="text" name="concat" class="form-control" placeholder="Concat" value="{{ $faskes->concat }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Provinsi</label>
            <input class="form-control" name="provinsi" placeholder="Provinsi" value="{{ $faskes->provinsi }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Pelayanan</label>
            <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan"
                value="{{ $faskes->pelayanan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Wilayah Kerja</label>
            <input class="form-control" name="wilayah_kerja" placeholder="Wilayah Kerja"
                value="{{ $faskes->wilayah_kerja }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Lat</label>
            <input type="text" name="lat" class="form-control" placeholder="Lat" value="{{ $faskes->lat }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Lon</label>
            <input class="form-control" name="lon" placeholder="Lon" value="{{ $faskes->lon }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Lat Lon</label>
            <input type="text" name="lat_long" class="form-control" placeholder="Lat Long"
                value="{{ $faskes->lat_long }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Ketersediaan Jaringan Optik</label>
            <input class="form-control" name="ketersediaan_jaringan_optik" placeholder="Ketersediaan Jaringan Optik"
                value="{{ $faskes->ketersediaan_jaringan_optik }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Layanan Telkom</label>
            <input type="text" name="layanan_telkom" class="form-control" placeholder="Layanan Telkom"
                value="{{ $faskes->layanan_telkom }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kompetitor Eksisting</label>
            <input class="form-control" name="kompetitor_eksisting" placeholder="Kompetitor Eksisting"
                value="{{ $faskes->kompetitor_eksisting }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Rekomendasi </label>
            <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi"
                value="{{ $faskes->rekomendasi }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection