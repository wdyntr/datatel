<?php

// app/Http/Controllers/SearchController.php
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

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Pencarian di semua model dengan atribut yang berbeda
        $smas = Sma::where('name', 'LIKE', "%{$query}%")
            ->orWhere('address', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Sma';
                return $item;
            });

        $dataPelanggans = DataPelanggan::where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'DataPelanggan';
                return $item;
            });

        $hotels = Hotel::where('name', 'LIKE', "%{$query}%")
            ->orWhere('location', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Hotel';
                return $item;
            });

        $banks = Bank::where('name', 'LIKE', "%{$query}%")
            ->orWhere('branch', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Bank';
                return $item;
            });

        $cafes = Cafe::where('name', 'LIKE', "%{$query}%")
            ->orWhere('menu', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Cafe';
                return $item;
            });

        $universitas = Universitas::where('name', 'LIKE', "%{$query}%")
            ->orWhere('faculty', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Universitas';
                return $item;
            });

        // Gabungkan semua hasil
        $results = collect();
        $results = $results->merge($smas);
        $results = $results->merge($dataPelanggans);
        $results = $results->merge($hotels);
        $results = $results->merge($banks);
        $results = $results->merge($cafes);
        $results = $results->merge($universitas);

        return view('search.results', ['results' => $results, 'query' => $query]);
    }
}

