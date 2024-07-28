@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Add Data</h1>
<hr />
<form action="{{ route('universitas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama_univ" class="form-control" placeholder="Nama Universitas/Sekolah Tinggi">
        </div>
        <div class="col">
            <select class="form-control" name="status">
                <option value="">-- Pilih Status --</option>
                <option value="Negeri">Negeri</option>
                <option value="Swasta">Swasta</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>
        <div class="col">
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten">
        </div>
        <div class="col">
            <input type="text" name="am" class="form-control" placeholder="AM">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <select class="form-control" name="layanan_telkom">
                <option value="">-- Pilih Layanan --</option>
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection