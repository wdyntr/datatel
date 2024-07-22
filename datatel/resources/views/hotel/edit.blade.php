@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Hotel</h1>
<hr />
<form action="{{ route('hotel.update', $hotel->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" placeholder="Kategori"
                value="{{ $hotel->kategori }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan"
                value="{{ $hotel->nama_pelanggan }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama AM</label>
            <input name="nama_am" class="form-control" placeholder="Nama AM" value="{{ $hotel->nama_am }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Almaat" value="{{ $hotel->alamat }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"
                value="{{ $hotel->kecamatan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kebupaten</label>
            <input class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $hotel->kabupaten }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" placeholder="Provinsi"
                value="{{ $hotel->provinsi }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Pelayanan</label>
            <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan"
                value="{{ $hotel->pelayanan }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Koordinat</label>
            <input type="text" name="koordinat" class="form-control" placeholder="Koordinat"
                value="{{ $hotel->koordinat }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Email PIC</label>
            <input type="text" name="email_pic" class="form-control" placeholder="Email PIC"
                value="{{ $hotel->email_pic }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Sosmed PIC</label>
            <input type="text" name="sosmed_pic" class="form-control" placeholder="Sosmed PIC"
                value="{{ $hotel->sosmed_pic }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Tersedia Layanan</label>
            <input type="text" name="tersedia_layanan" class="form-control" placeholder="Tersedia Layanan"
                value="{{ $hotel->tersedia_layanan }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status Berlangganan</label>
            <select class="form-control" name="status_berlangganan">
                <option value="">-- Pilih Status Berlangganan --</option>
                <option value="Aktif" {{ $hotel->status_berlangganan == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Tidka Aktif" {{ $hotel->status_berlangganan == 'Tidak Aktif' ? 'selected' : '' }}>Tidak
                    Aktif
                </option>
            </select>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Layanan</label>
            <input type="text" name="jenis_layanan" class="form-control" placeholder="Jenis Layanan"
                value="{{ $hotel->jenis_layanan }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection