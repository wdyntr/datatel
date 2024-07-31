@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Add Data</h1>
<hr />
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

<form action="{{ route('perusahaan.store') }}" method="POST" enctype="multipart/form-data">
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
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
        </div>
        <div class="col">
            <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten">
        </div>

    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
        </div>
        <div class="col">
            <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan">
        </div>

    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="titik_koordinat" class="form-control" placeholder="Titik Koordinat">
        </div>

        <div class="col">
            <select class="form-control" name="berlangganan">
                <option value="">-- Pilih Sudah Berlangganan/Belum --</option>
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select>
        </div>

    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="no_telp" class="form-control" placeholder="No Telp/HP PIC">
        </div>
        <div class="col">
            <input type="text" name="jenis_layanan" class="form-control" placeholder="Jenis Layanan">
        </div>

    </div>

    <div class="row mb-3">
        <div class="col">
            <select class="form-control" name="status_berlangganan">
                <option value="">-- Pilih Status Berlangganan --</option>
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select>
        </div>
        <div class="col">
            <input type="text" name="tersedia_layanan" class="form-control" placeholder="Tersedia Layanan">
        </div>

    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="sosmed_email_pic" class="form-control" placeholder="Sosmed/Email PIC">
        </div>
        <div class="col">
            <textarea name="ket" class="form-control" placeholder="Keterangan"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection