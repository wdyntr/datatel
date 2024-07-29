<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah total produk (atau data dari tabel produk)
        $totalCount = \App\Models\Product::count();
    
        // Menghitung jumlah pelanggan berlangganan dari tabel-tabel yang berbeda
        $count1 = \App\Models\bank::whereIn('layanan_telkom', ['sudah', 'aktif'])->count();
        $count2 = \App\Models\cafe::whereIn('berlangganan', ['sudah', 'aktif'])->count();
        $count3 = \App\Models\hotel::whereIn('status_berlangganan', ['sudah', 'aktif'])->count();
        $count4 = \App\Models\univ::whereIn('layanan_telkom', ['sudah', 'aktif'])->count();
        $count5 = \App\Models\wisata_lamsel::whereIn('berlangganan', ['sudah', 'aktif'])->count();
        $count6 = \App\Models\wisataKuliner::whereIn('berlangganan', ['sudah', 'aktif'])->count();
    
        // Menghitung total jumlah pelanggan berlangganan
        $jumlah = $count1 + $count2 + $count3 + $count4 + $count5 + $count6;
    
        // Mengirim data ke view
        return view('dashboard', compact('jumlah', 'totalCount'));
    }
    

}
