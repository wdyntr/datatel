@extends('layouts.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Data Hotel</h1>
    <a href="{{ route('hotel.create') }}" class="btn btn-primary">Add data</a>
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
            <th>Nama Akomodasi</th>
            <th>Klasifikasi</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Jumlah Kamar</th>
            <th>Jumlah Tempat Tidur</th>
            <th>Kabupaten</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($hotel->count() > 0)
            @foreach($hotel as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->nama_akomodasi }}</td>
                    <td class="align-middle">{{ $rs->klasifikasi }}</td>
                    <td class="align-middle">{{ $rs->alamat }}</td>
                    <td class="align-middle">{{ $rs->no_telp }}</td>
                    <td class="align-middle">{{ $rs->jumlah_kamar }}</td>
                    <td class="align-middle">{{ $rs->jumlah_tempat_tidur }}</td>
                    <td class="align-middle">{{ $rs->kabupaten }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('hotel.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('hotel.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('hotel.destroy', $rs->id) }}" method="POST" type="button"
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