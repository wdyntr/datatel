@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Data</h1>
<hr />
<form action="{{ route('univ.update', $univ->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Universitas</label>
            <input type="text" name="nama_univ" class="form-control" placeholder="Nama Universitas/Sekolah Tinggi"
                value="{{ $univ->nama_univ }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <select class="form-control" name="status">
                <option value="">-- Pilih Ketersediaan Jaringan Optik --</option>
                <option value="Negeri" {{ $univ->status == 'Negeri' ? 'selected' : '' }}>Negeri</option>
                <option value="Swasta" {{ $univ->status == 'Swasta' ? 'selected' : '' }}>Swasta</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input name="alamat" class="form-control" placeholder="Alamat" value="{{ $univ->alamat }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan"
                value="{{ $univ->kecamatan }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" placeholder="Kabpaten"
                value="{{ $univ->kecamatan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">AM</label>
            <input class="form-control" name="am" placeholder="AM" value="{{ $univ->am }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Layanan Telkom</label>
            <select class="form-control" name="layanan_telkom">
                <option value="">-- Pilih Ketersediaan Jaringan Optik --</option>
                <option value="Sudah" {{ $univ->layanan_telkom == 'Sudah' ? 'selected' : '' }}>Sudah</option>
                <option value="Belum" {{ $univ->layanan_telkom == 'Belum' ? 'selected' : '' }}>Belum</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection