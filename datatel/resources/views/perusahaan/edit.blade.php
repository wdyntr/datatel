@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Data</h1>
<hr />
<form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $perusahaan->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                value="{{ $perusahaan->alamat }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"
                value="{{ $perusahaan->kecamatan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kebupaten</label>
            <input name="kabupaten" class="form-control" placeholder="Kabupaten" value="{{ $perusahaan->kabupaten }}">
        </div>

    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" placeholder="Provinsi"
                value="{{ $perusahaan->provinsi }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Pelayanan</label>
            <input class="form-control" name="pelayanan" placeholder="Pelayanan" value="{{ $perusahaan->pelayanan }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Titik Koordinat</label>
            <input type="text" name="titik_koordinat" class="form-control" placeholder="Titik Koordinat"
                value="{{ $perusahaan->titik_koordinat }}">
        </div>

        <div class="col mb-3">
            <label class="form-label">Sudah Berlangganan/Belum</label>
            <select class="form-control" name="berlangganan">
                <option value="">-- Pilih Sudah Berlangganan/Belum --</option>
                <option value="Sudah" {{ $perusahaan->berlangganan == 'Sudah' ? 'selected' : '' }}>
                    Sudah</option>
                <option value="Belum" {{ $perusahaan->berlangganan == 'Belum' ? 'selected' : '' }}>Belum</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No Telp/HP PIC</label>
            <input type="text" name="no_telp" class="form-control" placeholder="No Telp/HP PIC"
                value="{{ $perusahaan->no_telp }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">jenis Layanan</label>
            <input class="form-control" name="jenis_layanan" placeholder="Jenis Layanan"
                value="{{ $perusahaan->jenis_layanan }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status Berlangganan</label>
            <select class="form-control" name="status_berlangganan">
                <option value="">-- Pilih Status Berlangganan --</option>
                <option value="Sudah" {{ $perusahaan->status_berlangganan == 'Sudah' ? 'selected' : '' }}>
                    Sudah</option>
                <option value="Belum" {{ $perusahaan->status_berlangganan == 'Belum' ? 'selected' : '' }}>Belum</option>
            </select>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tersedia Layanan</label>
            <input class="form-control" name="tersedia_layanan" placeholder="Tersedia Layanan"
                value="{{ $perusahaan->tersedia_layanan }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Sosmed/Email PIC</label>
            <input type="text" name="sosmed_email_pic" class="form-control" placeholder="Sosmed/Email PIC"
                value="{{ old('sosmed_email_pic', $perusahaan->sosmed_email_pic) }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="ket" class="form-control" placeholder="Keterangan"
                rows="4">{{ old('ket', $perusahaan->ket) }}</textarea>
        </div>
    </div>




    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection