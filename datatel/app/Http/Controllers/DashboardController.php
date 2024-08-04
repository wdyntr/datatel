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
use App\Models\perusahaan;
use App\Models\bpr;
use App\Models\stasiunTv;

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
        $count8 = \App\Models\perusahaan::whereIn('status_berlangganan', ['sudah', 'aktif'])->count();
        $count9 = \App\Models\bpr::whereIn('status_berlangganan', ['sudah', 'aktif'])->count();
        $count10 = \App\Models\stasiuntv::whereIn('status_berlangganan', ['sudah', 'aktif'])->count();

        // Menghitung jumlah pelanggan berlangganan dari tabel-tabel yang berbeda
        $min1 = \App\Models\bank::whereIn('layanan_telkom', ['belum', 'tidak aktif'])->count();
        $min2 = \App\Models\cafe::whereIn('berlangganan', ['belum', 'tidak aktif'])->count();
        $min3 = \App\Models\hotel::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->count();
        $min4 = \App\Models\univ::whereIn('layanan_telkom', ['belum', 'tidak aktif'])->count();
        $min5 = \App\Models\wisata_lamsel::whereIn('berlangganan', ['belum', 'tidak aktif'])->count();
        $min6 = \App\Models\wisataKuliner::whereIn('berlangganan', ['belum', 'tidak aktif'])->count();
        $min7 = \App\Models\pdam::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->count();
        $min8 = \App\Models\perusahaan::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->count();
        $min9 = \App\Models\bpr::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->count();
        $min10 = \App\Models\stasiuntv::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->count();

        // Menghitung total jumlah pelanggan berlangganan
        $jumlah = $count1 + $count2 + $count3 + $count4 + $count5 + $count6 + $count7 + $count8 + $count9 + $count10 + $totalCount;
        $total = $min1 + $min2 + $min3 + $min4 + $min5 + $min6 + $min7 + $min8 + $min9 + $min10;
        // Mengirim data ke view
        return view('dashboard', compact('jumlah', 'totalCount', 'total'));
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
            $perusahaan = perusahaan::whereIn('status_berlangganan', ['sudah', 'aktif'])->get();
            $bpr = bpr::whereIn('status_berlangganan', ['sudah', 'aktif'])->get();
            $stasiuntv = stasiuntv::whereIn('status_berlangganan', ['sudah', 'aktif'])->get();

            $results = collect()
                ->merge($bank)
                ->merge($cafe)
                ->merge($hotel)
                ->merge($univ)
                ->merge($wisataLamsel)
                ->merge($wisataKuliner)
                ->merge($pdam)
                ->merge($perusahaan)
                ->merge($bpr)
                ->merge($stasiuntv)
                ->merge($dataPelanggan);
        } else {
            $bank = Bank::whereIn('layanan_telkom', ['belum', 'tidak aktif'])->get();
            $cafe = Cafe::whereIn('berlangganan', ['belum', 'tidak aktif'])->get();
            $hotel = Hotel::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->get();
            $univ = Univ::whereIn('layanan_telkom', ['belum', 'tidak aktif'])->get();
            $wisataLamsel = wisata_lamsel::whereIn('berlangganan', ['belum', 'tidak aktif'])->get();
            $wisataKuliner = WisataKuliner::whereIn('berlangganan', ['belum', 'tidak aktif'])->get();
            $pdam = pdam::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->get();
            $perusahaan = perusahaan::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->get();
            $bpr = bpr::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->get();
            $stasiuntv = stasiuntv::whereIn('status_berlangganan', ['belum', 'tidak aktif'])->get();

            $results = collect()
                ->merge($bank)
                ->merge($cafe)
                ->merge($hotel)
                ->merge($univ)
                ->merge($wisataLamsel)
                ->merge($pdam)
                ->merge($perusahaan)
                ->merge($bpr)
                ->merge($stasiuntv)
                ->merge($wisataKuliner);
        }

        return view('filter.results', compact('results', 'status'));
    }

}
