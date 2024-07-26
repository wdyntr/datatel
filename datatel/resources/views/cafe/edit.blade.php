@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Data</h1>
<hr />
<form action="{{ route('cafe.update', $cafe->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $cafe->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" value="{{ $cafe->lokasi }}">
        </div>
    </div>
    <div class="row">

        <div class="col mb-3">
            <label class="form-label">Status Berlangganan</label>
            <select class="form-control" name="berlangganan">
                <option value="">-- Sudah Berlanggaan/Belum --</option>
                <option value="Sudah" {{ $cafe->berlangganan == 'Sudah' ? 'selected' : '' }}>Sudah</option>
                <option value="Belum" {{ $cafe->berlangganan == 'Belum' ? 'selected' : '' }}>Belum</option>
            </select>
        </div>

        <div class="col mb-3">
            <label class="form-label">Email/Sosmed</label>
            <input type="text" class="form-control" name="email_sosmed" placeholder="email_sosmed"
                value="{{ $cafe->email_sosmed }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jenis Layanan</label>
            <input type="text" name="jenis_layanan" class="form-control" placeholder="Jenis Layanan"
                value="{{ $cafe->jenis_layanan }}">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection