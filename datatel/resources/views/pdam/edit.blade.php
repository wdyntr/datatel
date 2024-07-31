@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Data</h1>
<hr />
<form action="{{ route('pdam.update', $pdam->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-control" placeholder="Nama" value="{{ $pdam->kategori }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Lokasi"
                value="{{ $pdam->nama_pelanggan }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama AM</label>
            <input type="text" name="nama_am" class="form-control" placeholder="Lokasi" value="{{ $pdam->nama_am }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input name="alamat" class="form-control" placeholder="Alamat" value="{{ $pdam->alamat }}">
        </div>

    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"
                value="{{ $pdam->kecamatan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kabupaten</label>
            <input class="form-control" name="kabupaten" placeholder="Kabupaten" value="{{ $pdam->kabupaten }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Concat</label>
            <input type="text" name="concat" class="form-control" placeholder="Concat" value="{{ $pdam->concat }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Provinsi</label>
            <input class="form-control" name="provinsi" placeholder="Provinsi" value="{{ $pdam->provinsi }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Pelayanan</label>
            <input type="text" name="pelayanan" class="form-control" placeholder="Pelayanan"
                value="{{ $pdam->pelayanan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Koordinat</label>
            <input class="form-control" name="koordinat" placeholder="Kabupaten" value="{{ $pdam->koordinat }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email PIC</label>
            <input type="text" name="email_pic" class="form-control" placeholder="Email PIC"
                value="{{ $pdam->email_pic }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">No HP PIC</label>
            <input class="form-control" name="no_hp_pic" placeholder="Kabupaten" value="{{ $pdam->no_hp_pic }}">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Sosmed PIC</label>
            <input class="form-control" name="sosmed_pic" placeholder="Sosmed PIC" value="{{ $pdam->sosmed_pic }}">
        </div>

        <div class="col mb-3">
            <label class="form-label">Ketersediaan Layanan</label>
            <select class="form-control" name="tersedia_layanan">
                <option value="">-- Pilih Ketersediaan Layanan --</option>
                <option value="Tersedia Layanan" {{ $pdam->tersedia_layanan == 'Tersedia Layanan' ? 'selected' : '' }}>
                    Tersedia Layanan</option>
                <option value="Tidak Tersedia" {{ $pdam->tersedia_layanan == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak
                    Tersedia</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status Berlangganan</label>
            <select class="form-control" name="status_berlangganan">
                <option value="">-- Pilih Status Berlangganan --</option>
                <option value="Aktif" {{ $pdam->status_berlangganan == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Tidak Aktif" {{ $pdam->status_berlangganan == 'Tidak Aktif' ? 'selected' : '' }}>Tidak
                    Aktif</option>
            </select>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Layanan</label>
            <input class="form-control" name="jenis_layanan" placeholder="Jenis Layanan"
                value="{{ $pdam->jenis_layanan }}">
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection