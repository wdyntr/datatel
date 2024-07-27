@extends('layouts.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Search Results for "{{ $query }}"</h1>
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
            <th>Type</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($results->count() > 0)
            @foreach($results as $result)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $result->type }}</td>
                    <td class="align-middle">{{ $result->display_name }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route(strtolower($result->type) . '.show', $result->id) }}" type="button" class="btn btn-secondary">Detail</a>
                            <a href="{{ route(strtolower($result->type) . '.edit', $result->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route(strtolower($result->type) . '.destroy', $result->id) }}" method="POST" type="button"
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
                <td class="text-center" colspan="4">Data tidak ditemukan</td>
            </tr>
        @endif
    </tbody>
</table>
@endsection
