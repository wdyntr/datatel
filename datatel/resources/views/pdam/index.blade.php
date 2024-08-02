@extends('layouts.app')

@section('contents')

<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Data PDAM</h1>

    <a href="{{ route('pdam.create') }}" class="btn btn-primary">Add data</a>
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
            <th>Kategori</th>
            <th>Nama Pelanggan</th>
            <th>Nama AM</th>
            <th>Alamat</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($pdam->count() > 0)
            @foreach($pdam as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kategori }}</td>
                    <td class="align-middle">{{ $rs->nama_pelanggan }}</td>
                    <td class="align-middle">{{ $rs->nama_am }}</td>
                    <td class="align-middle">{{ $rs->alamat }}</td>
                    <td class="align-middle">{{ $rs->kecamatan }}</td>
                    <td class="align-middle">{{ $rs->kabupaten }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('pdam.show', $rs->id) }}" type="button" class="btn btn-secondary">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('pdam.edit', $rs->id)}}" type="button" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{ route('pdam.destroy', $rs->id) }}" method="POST"
                                onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0"><i class="fa fa-trash"></i></button>
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

<!-- Tambahkan link paginasi -->
<div class="d-flex justify-content-center">
    {{ $pdam->links() }}
</div>
@endsection