@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Edit Data</h1>
<hr />
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

<form action="{{ route('sma_smk.update', $sma->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $sma->nama }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $sma->alamat }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <select class="form-control" name="status">
                <option value="">-- Pilih Status --</option>
                <option value="Negeri" {{ $sma->status == 'Negeri' ? 'selected' : '' }}>Negeri</option>
                <option value="Swasta" {{ $sma->status == 'Swasta' ? 'selected' : '' }}>Swasta</option>
            </select>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jumlah Siswa</label>
            <input type="text" class="form-control" name="jumlah_siswa" placeholder="Jumlah Siswa"
                value="{{ $sma->jumlah_siswa }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan"
                value="{{ $sma->kecamatan }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Kabupaten/Kota</label>
            <input class="form-control" name="kabupaten/kota" placeholder="Kabupaten/Kota"
                value="{{ $sma->{'kabupaten/kota'} }}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Provinsi</label>
            <input type="text" name="provinsi" class="form-control" placeholder="provinsi" value="{{ $sma->provinsi }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Ketersediaan Jaringan Optik</label>
            <select class="form-control" name="jaringan_optik">
                <option value="">-- Pilih Ketersediaan Jaringan Optik --</option>
                <option value="Ready" {{ $sma->jaringan_optik == 'Ready' ? 'selected' : '' }}>Ready</option>
                <option value="Not Ready" {{ $sma->jaringan_optik == 'Not Ready' ? 'selected' : '' }}>Not Ready</option>
            </select>
        </div>

    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">ODP Tersedia</label>
            <input type="text" name="odp" class="form-control" placeholder="ODP Tersedia" value="{{ $sma->odp }}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Layanan Telkom Eksisting</label>
            <input type="text" name="layanan_telkom" class="form-control" placeholder="Layanan Telkom Eksisting"
                value="{{ $sma->layanan_telkom }}">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Titik Koordinat</label>
            <input type="text" name="titik_koordinat" class="form-control" placeholder="Titik Koordinat Pelanggan"
                value="{{ $sma->titik_koordinat }}">
        </div>
        <div class="col">
            <label class="form-label">Jarak Pelanggan ke ODP</label>

            <input type="text" class="form-control" name="jarak" placeholder="Jarak Pelanggan ke ODP"
                value="{{ $sma->jarak }}">
        </div>
        <div class="col">
            <label class="form-label">Layak/Tidak Layak</label>
            <select class="form-control" name="layak_tidak">
                <option value="">-- Pilih Layak/Tidak --</option>
                <option value="Layak" {{ $sma->layak_tidak == 'Layak' ? 'selected' : '' }}>Layak</option>
                <option value="Tidak Layak" {{ $sma->layak_tidak == 'Tidak Layak' ? 'selected' : '' }}>Tidak Layak
                </option>
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