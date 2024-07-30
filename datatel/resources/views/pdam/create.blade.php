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

<form action="{{ route('pdam.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="kategori" class="form-control" placeholder="Kategori">
        </div>
        <div class="col">
            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama_am" class="form-control" placeholder="Nama AM">
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
            <input type="text" name="koordinat" class="form-control" placeholder="Koordinat">
        </div>

    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="email_pic" class="form-control" placeholder="Email PIC">
        </div>
        <div class="col">
            <input type="text" name="no_hp_pic" class="form-control" placeholder="No HP PIC">
        </div>

    </div>

    <div class="row mb-3">
        <div class="col">
            <input type="text" name="sosmed_pic" class="form-control" placeholder="Sosmed PIC">
        </div>
        <div class="col">
            <select class="form-control" name="tersedia_layanan">
                <option value="">-- Pilih Ketersediaan Layanan --</option>
                <option value="Tersedia Layanan">Tersedia Layanan</option>
                <option value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
        </div>

    </div>

    <div class="row mb-3">

        <div class="col">
            <select class="form-control" name="status_berlangganan">
                <option value="">-- Pilih Status Belangganan --</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>
        <div class="col">
            <input type="text" name="jenis_layanan" class="form-control" placeholder="Jenis Layanan">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection