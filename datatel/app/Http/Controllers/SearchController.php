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

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Pencarian di semua model dengan atribut yang berbeda
        $smas = Sma::where('nama', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Sma';
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
                $item->type = 'WisataLamsel';
                return $item;
            });

        // Gabungkan semua hasil
        $results = collect()
            ->merge($smas)
            ->merge($dataPelanggans)
            ->merge($hotels)
            ->merge($banks)
            ->merge($cafes)
            ->merge($universitas)
            ->merge($wisataLamsel);

        return view('search.index', ['results' => $results, 'query' => $query]);
    }
}
