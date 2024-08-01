<!-- resources/views/filter-results.blade.php -->
@extends('layouts.app')

@section('contents')
<div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <h1 class="h3 mb-0 text-gray-800">Hasil Filter: {{ $status == 'sudah_aktif' ? 'Sudah atau Aktif Berlangganan' : 'Belum Berlangganan' }}</h1>
                @if($results->isEmpty())
                    <p>Tidak ada data ditemukan.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <!-- Tambahkan header lain sesuai kebutuhan -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $result)
                                    <tr>
                                        <td>
                                            @switch(class_basename($result))
                                                @case('Product')
                                                    {{ 'Data Pelanggan' }}
                                                    @break
                                                @case('bank')
                                                    {{ 'Bank' }}
                                                    @break
                                                @case('cafe')
                                                    {{ 'Cafe' }}
                                                    @break
                                                @case('hotel')
                                                    {{ 'Hotel' }}
                                                    @break
                                                @case('faskes')
                                                    {{ 'Fasilitas Kesehatan' }}
                                                    @break
                                                @case('univ')
                                                    {{ 'Universitas' }}
                                                    @break
                                                @case('wisata_lamsel')
                                                    {{ 'Wisata Lamsel' }}
                                                    @break
                                                @case('wisataKuliner')
                                                    {{ 'Wisata Kuliner' }}
                                                    @break
                                                @case('pdam')
                                                    {{ 'PDAM' }}
                                                    @break
                                                @case('perusahaan')
                                                    {{ 'Perusahaan' }}
                                                    @break
                                                @case('bpr')
                                                    {{ 'BPR' }}
                                                    @break
                                                @case('stasiuntv')
                                                    {{ 'Stasiun TV' }}
                                                    @break
                                                @default
                                                    {{ class_basename($result) }}
                                            @endswitch
                                        
                                        </td>
                                        <td>{{ $result->id }}</td>
                                        <td>
                                            @switch(class_basename($result))
                                                @case('bank')
                                                    {{ $result->nama_bank }}
                                                    @break
                                                @case('cafe')
                                                    {{ $result->nama }}
                                                    @break
                                                @case('hotel')
                                                    {{ $result->nama_pelanggan }}
                                                    @break
                                                @case('faskes')
                                                    {{ $result->nama_puskes }}
                                                    @break
                                                @case('univ')
                                                    {{ $result->nama_univ }}
                                                    @break
                                                @case('wisata_lamsel')
                                                    {{ $result->nama }}
                                                    @break
                                                @case('wisataKuliner')
                                                    {{ $result->nama }}
                                                    @break
                                                @case('pdam')
                                                    {{ $result->nama_pelanggan }}
                                                    @break
                                                @default
                                                    {{ $result->nama ?? $result->nama_pelanggan ?? $result->nama_akun ?? $result->title ?? 'N/A' }}
                                            @endswitch
                                        </td>
                                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
