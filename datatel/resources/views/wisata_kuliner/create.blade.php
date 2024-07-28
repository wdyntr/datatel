@extends('layouts.app')

@section('contents')
<h1 class="mb-0">Add Data</h1>
<hr />
<form action="{{ route('wisata_kuliner.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="nama" class="form-control" placeholder="Nama">
        </div>
        <div class="col">
            <input type="text" name="lokasi" class="form-control" placeholder="Lokasi">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <select class="form-control" name="berlangganan">
                <option value="">-- Sudah Berlanggaan/Belum --</option>
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select>
        </div>
        <div class="col">
            <input type="email" name="email_sosmed" class="form-control" placeholder="Email/Sosmed">
        </div>
    </div>
    <div class="row mb-3">
       
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