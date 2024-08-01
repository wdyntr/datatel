@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Data</h1>
<hr />
<form action="{{ route('stasiunTv.update', $stasiunTv->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kategroi</label>
            <input type="text" name="kategori" class="form-control" placeholder="Kategori"
                value="{{ $stasiunTv->kategori }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Pelangan</label>
            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan"
                value="{{ $stasiunTv->nama_pelanggan }}">
        </div>

    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama AM</label>
            <input type="text" name="nama_am" class="form-control" placeholder="Nama AM"
                value="{{ $stasiunTv->nama_am }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $stasiunTv->alamat }}">
        </div>

    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{ $stasiunTv->kecamatan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten"
                value="{{ $stasiunTv->kabupaten }}">
        </div>

    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Provinsi</label>
            <input class="form-control" name="provinsi" placeholder="Provinsi" value="{{ $stasiunTv->provinsi }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Pelayanan</label>
            <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan"
                value="{{ $stasiunTv->pelayanan }}">
        </div>

    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Koordinat</label>
            <input type="text" name="koordinat" class="form-control" placeholder="Koordinat"
                value="{{ $stasiunTv->koordinat }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Email PIC</label>
            <input type="text" name="email_pic" class="form-control" placeholder="Email PIC"
                value="{{ $stasiunTv->email_pic }}">
        </div>

    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No HP PIC</label>
            <input class="form-control" name="no_hp_pic" placeholder="No HP PIC" value="{{ $stasiunTv->no_hp_pic }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Sosmed PIC</label>
            <input class="form-control" name="sosmed_pic" placeholder="Sosmed PIC" value="{{ $stasiunTv->sosmed_pic }}">
        </div>

    </div>

    <div class="row">


        <div class="col mb-3">
            <label class="form-label">Tersedia Layanan</label>
            <select class="form-control" name="tersedia_layanan">
                <option value="">-- Pilih Tersedia Layanan --</option>
                <option value="Tersedia Layanan" {{ $stasiunTv->tersedia_layanan == 'Tersedia Layanan' ? 'selected' : '' }}>
                    Tersedia Layanan</option>
                <option value="Tidak Tersedia" {{ $stasiunTv->tersedia_layanan == 'Tidak Tersedia' ? 'selected' : '' }}>
                    Tidak
                    Tersedia</option>
            </select>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status Berlangganan</label>
            <select class="form-control" name="status_berlangganan">
                <option value="">-- Pilih Status Berlangganan --</option>
                <option value="Aktif" {{ $stasiunTv->status_berlangganan == 'Aktif' ? 'selected' : '' }}>
                    Aktif</option>
                <option value="Tidak Aktif" {{ $stasiunTv->status_berlangganan == 'Tidak Aktif' ? 'selected' : '' }}>Tidak
                    Aktif
                </option>
            </select>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Layanan</label>
            <input class="form-control" name="jenis_layanan" placeholder="Jenis Layanan"
                value="{{ $stasiunTv->jenis_layanan }}">
        </div>
    </div>




    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection