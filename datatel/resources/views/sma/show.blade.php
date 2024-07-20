@extends('layouts.app')
    
@section('contents')
    <h1 class="mb-0">Detail Data</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $sma->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $sma->alamat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input name="status" class="form-control" placeholder="Status" value="{{ $sma->status }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jumlah Siswa</label>
            <input type="text" class="form-control" name="jumlah_siswa" placeholder="Jumlah Siswa" value="{{ $sma->jumlah_siswa }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $sma->kecamatan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kabupaten/Kota</label>
            <input class="form-control" name="kabupaten/kota" placeholder="Kabupaten/Kota" value="{{ $sma->{'kabupaten/kota'} }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" placeholder="provinsi" value="{{ $sma->provinsi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Ketersediaan Jaringan Optik</label>
            <input type="text" name="jaringan_optik" class="form-control" placeholder="Ketersediaan Jaringan Optik" value="{{ $sma->jaringan_optik }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ODP Tersedia</label>
            <input type="text" name="odp" class="form-control" placeholder="ODP Tersedia" value="{{ $sma->odp }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Layanan Telkom Eksisting</label>
            <input type="text" name="layanan_telkom" class="form-control" placeholder="Layanan Telkom Eksisting" value="{{ $sma->layanan_telkom }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $sma->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $sma->updated_at }}" readonly>
        </div>
    </div>
@endsection