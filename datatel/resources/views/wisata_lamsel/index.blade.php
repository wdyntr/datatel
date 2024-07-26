@extends('layouts.app')

@section('contents')

<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Data Wisata Lampung Selatan</h1>

    <a href="{{ route('wisata_lamsel.create') }}" class="btn btn-primary">Add data</a>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Tikor</th>
            <th>Sudah Berlangganan/Belum</th>
            <th>Email/Sosmed</th>
            <th>Jenis Layanan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($wisata_lamsel->count() > 0)
            @foreach($wisata_lamsel as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->nama }}</td>
                    <td class="align-middle">{{ $rs->lokasi }}</td>
                    <td class="align-middle">{{ $rs->tikor }}</td>
                    <td class="align-middle">{{ $rs->berlangganan }}</td>
                    <td class="align-middle">{{ $rs->email_sosmed }}</td>
                    <td class="align-middle">{{ $rs->jenis_layanan }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('wisata_lamsel.show', $rs->id) }}" type="button"
                                class="btn btn-secondary">Detail</a>
                            <a href="{{ route('wisata_lamsel.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('wisata_lamsel.destroy', $rs->id) }}" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Data tidak ditemukan</td>
            </tr>
        @endif
    </tbody>
</table>
@endsection