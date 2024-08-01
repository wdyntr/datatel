<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Cafe;
use App\Models\Faskes;
use App\Models\hotel;
use App\Models\Product;
use App\Models\Sma;
use App\Models\Univ;
use App\Models\wisata_lamsel;
use App\Models\wisataKuliner;
use App\Models\pdam;
use App\Models\perusahaan;
use App\Models\bpr;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Pencarian di semua model dengan atribut yang berbeda
        $smas = Sma::where('nama', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'sma_smk';
                return $item;
            });

        $dataPelanggans = Product::where('nama_akun', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'datapelanggan';
                return $item;
            });

        $hotels = hotel::where('nama_pelanggan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Hotel';
                return $item;
            });

        $banks = Bank::where('nama_bank', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Bank';
                return $item;
            });

        $faskes = Faskes::where('nama_puskes', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Faskes';
                return $item;
            });

        $cafes = Cafe::where('nama', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Cafe';
                return $item;
            });

        $universitas = Univ::where('nama_univ', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Universitas';
                return $item;
            });

        $wisataLamsel = wisata_lamsel::where('nama', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'wisata_lamsel';
                return $item;
            });

        $wisatakuilner = wisataKuliner::where('nama', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'wisata_kuliner';
                return $item;
            });

        $pdam = pdam::where('nama_pelanggan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'pdam';
                return $item;
            });

        $perusahaan = perusahaan::where('nama', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'perusahaan';
                return $item;
            });

        $bpr = bpr::where('nama_pelanggan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'bpr';
                return $item;
            });

        // Gabungkan semua hasil
        $results = collect()
            ->merge($smas)
            ->merge($dataPelanggans)
            ->merge($hotels)
            ->merge($banks)
            ->merge($faskes)
            ->merge($cafes)
            ->merge($universitas)
            ->merge($wisataLamsel)
            ->merge($pdam)
            ->merge($perusahaan)
            ->merge($bpr)
            ->merge($wisatakuilner);

        return view('search.index', ['results' => $results, 'query' => $query]);
    }
}
