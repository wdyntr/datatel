@extends('layouts.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Data SMA/SMK</h1>
    <a href="{{ route('SMA_SMK.create') }}" class="btn btn-primary">Add data</a>
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
            <th>Alamat</th>
            <th>Status</th>
            <th>Jumlah Siswa</th>
            <th>Kecamatan</th>
            <th>Kabupaten/Kota</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($sma->count() > 0)
            @foreach($sma as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->nama }}</td>
                    <td class="align-middle">{{ $rs->alamat }}</td>
                    <td class="align-middle">{{ $rs->status }}</td>
                    <td class="align-middle">{{ $rs->jumlah_siswa }}</td>
                    <td class="align-middle">{{ $rs->kecamatan }}</td>
                    <td class="align-middle">{{ $rs->{'kabupaten/kota'} }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('SMA_SMK.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('SMA_SMK.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('SMA_SMK.destroy', $rs->id) }}" method="POST" type="button"
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