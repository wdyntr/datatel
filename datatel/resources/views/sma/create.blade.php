@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Add Data</h1>
<hr />
<form action="{{ route('sma.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="col">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="status" class="form-control" placeholder="Status">
        </div>
        <div class="col">
            <input type="text" name="jumlah_siswa" class="form-control" placeholder="Jumlah Siswa">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
        </div>
        <div class="col">
            <input type="text" name="kabupaten/kota" class="form-control" placeholder="Kabupaten/Kota">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
        </div>
        <div class="col">
        <select class="form-control" name="jaringan_optik">
            <option value="">-- Pilih Ketersediaan Jaringan Optik --</option>
            <option value="Ready">Ready</option>
            <option value="Not Ready">Not Ready</option>
        </select>
    </div>

    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="odp" class="form-control" placeholder="ODP">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="layanan_telkom" placeholder="Layanan Telkom Eksisting">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection