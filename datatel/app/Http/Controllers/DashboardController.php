<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bank;
use App\Models\cafe;
use App\Models\faskes;
use App\Models\hotel;
use App\Models\Product;
use App\Models\Sma;
use App\Models\univ;
use App\Models\wisata_lamsel;
use App\Models\wisataKuliner;
use App\Models\pdam;

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
        $count7 = \App\Models\pdam::whereIn('status_berlangganan', ['sudah', 'aktif'])->count();

        // Menghitung total jumlah pelanggan berlangganan
        $jumlah = $count1 + $count2 + $count3 + $count4 + $count5 + $count6 + $count7;

        // Mengirim data ke view
        return view('dashboard', compact('jumlah', 'totalCount'));
    }

    public function filter(Request $request)
    {
        $status = $request->input('status');

        if ($status == 'sudah_aktif') {
            $dataPelanggan = Product::all();
            $bank = Bank::whereIn('layanan_telkom', ['sudah', 'aktif'])->get();
            $cafe = Cafe::whereIn('berlangganan', ['sudah', 'aktif'])->get();
            $hotel = Hotel::whereIn('status_berlangganan', ['sudah', 'aktif'])->get();
            $univ = Univ::whereIn('layanan_telkom', ['sudah', 'aktif'])->get();
            $wisataLamsel = wisata_lamsel::whereIn('berlangganan', ['sudah', 'aktif'])->get();
            $wisataKuliner = WisataKuliner::whereIn('berlangganan', ['sudah', 'aktif'])->get();
            $pdam = pdam::whereIn('status_berlangganan', ['sudah', 'aktif'])->get();

            $results = collect()
                ->merge($bank)
                ->merge($cafe)
                ->merge($hotel)
                ->merge($univ)
                ->merge($wisataLamsel)
                ->merge($wisataKuliner)
                ->merge($pdam)
                ->merge($dataPelanggan);
        } else {
            $bank = Bank::whereIn('layanan_telkom', ['belum', 'tidak aktif'])->get();
            $cafe = Cafe::whereIn('berlangganan', ['belum', 'tidak aktif'])->get();
            $hotel = Hotel::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->get();
            $univ = Univ::whereIn('layanan_telkom', ['belum', 'tidak aktif'])->get();
            $wisataLamsel = wisata_lamsel::whereIn('berlangganan', ['belum', 'tidak aktif'])->get();
            $wisataKuliner = WisataKuliner::whereIn('berlangganan', ['belum', 'tidak aktif'])->get();
            $pdam = pdam::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->get();

            $results = collect()
                ->merge($bank)
                ->merge($cafe)
                ->merge($hotel)
                ->merge($univ)
                ->merge($wisataLamsel)
                ->merge($pdam)
                ->merge($wisataKuliner);
        }

        return view('filter.results', compact('results', 'status'));
    }

}
