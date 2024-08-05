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
use App\Models\stasiuntv;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Pencarian di semua model dengan atribut yang berbeda
        $smas = Sma::where('nama', 'LIKE', "%{$query}%")
            ->orWhere('alamat', 'LIKE', "%{$query}%")
            ->orWhere('status', 'LIKE', "%{$query}%")
            ->orWhere('jumlah_siswa', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten/kota', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->orWhere('jaringan_optik', 'LIKE', "%{$query}%")
            ->orWhere('odp', 'LIKE', "%{$query}%")
            ->orWhere('layanan_telkom', 'LIKE', "%{$query}%")
            ->orWhere('titik_koordinat', 'LIKE', "%{$query}%")
            ->orWhere('jarak', 'LIKE', "%{$query}%")
            ->orWhere('layak_tidak', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'sma_smk';
                return $item;
            });


        $dataPelanggans = Product::where('nama_akun', 'LIKE', "%{$query}%")
            ->orWhere('witel', 'LIKE', "%{$query}%")
            ->orWhere('ubis', 'LIKE', "%{$query}%")
            ->orWhere('id_number', 'LIKE', "%{$query}%")
            ->orWhere('am', 'LIKE', "%{$query}%")
            ->orWhere('nipnas', 'LIKE', "%{$query}%")
            ->orWhere('nama_grup', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'datapelanggan';
                return $item;
            });

        $hotels = hotel::where('nama_pelanggan', 'LIKE', "%{$query}%")
            ->orWhere('kategori', 'LIKE', "%{$query}%")
            ->orWhere('nama_am', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->orWhere('pelayanan', 'LIKE', "%{$query}%")
            ->orWhere('koordinat', 'LIKE', "%{$query}%")
            ->orWhere('email_pic', 'LIKE', "%{$query}%")
            ->orWhere('no_hp', 'LIKE', "%{$query}%")
            ->orWhere('sosmed_pic', 'LIKE', "%{$query}%")
            ->orWhere('tersedia_layanan', 'LIKE', "%{$query}%")
            ->orWhere('status_berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('jenis_layanan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Hotel';
                return $item;
            });

        $banks = Bank::where('nama_bank', 'LIKE', "%{$query}%")
            ->orWhere('alamat', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten/kota', 'LIKE', "%{$query}%")
            ->orWhere('am', 'LIKE', "%{$query}%")
            ->orWhere('layanan_telkom', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Bank';
                return $item;
            });

        $faskes = Faskes::where('nama_puskes', 'LIKE', "%{$query}%")
            ->orWhere('kode_puskesmas', 'LIKE', "%{$query}%")
            ->orWhere('kode_puskesmas2', 'LIKE', "%{$query}%")
            ->orWhere('treg', 'LIKE', "%{$query}%")
            ->orWhere('witel', 'LIKE', "%{$query}%")
            ->orWhere('alamat', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten', 'LIKE', "%{$query}%")
            ->orWhere('concat', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->orWhere('pelayanan', 'LIKE', "%{$query}%")
            ->orWhere('wilayah_kerja', 'LIKE', "%{$query}%")
            ->orWhere('lat', 'LIKE', "%{$query}%")
            ->orWhere('lat_long', 'LIKE', "%{$query}%")
            ->orWhere('ketersediaan_jaringan_optik', 'LIKE', "%{$query}%")
            ->orWhere('layanan_telkom', 'LIKE', "%{$query}%")
            ->orWhere('kompetitor_eksisting', 'LIKE', "%{$query}%")
            ->orWhere('rekomendasi', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Faskes';
                return $item;
            });

        $cafes = Cafe::where('nama', 'LIKE', "%{$query}%")
            ->orWhere('lokasi', 'LIKE', "%{$query}%")
            ->orWhere('berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('email_sosmed', 'LIKE', "%{$query}%")
            ->orWhere('jenis_layanan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Cafe';
                return $item;
            });

        $universitas = Univ::where('nama_univ', 'LIKE', "%{$query}%")
            ->orWhere('status', 'LIKE', "%{$query}%")
            ->orWhere('alamat', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten', 'LIKE', "%{$query}%")
            ->orWhere('am', 'LIKE', "%{$query}%")
            ->orWhere('layanan_telkom', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'Universitas';
                return $item;
            });

        $wisataLamsel = wisata_lamsel::where('nama', 'LIKE', "%{$query}%")
            ->orWhere('lokasi', 'LIKE', "%{$query}%")
            ->orWhere('tikor', 'LIKE', "%{$query}%")
            ->orWhere('berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('email_sosmed', 'LIKE', "%{$query}%")
            ->orWhere('jenis_layanan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'wisata_lamsel';
                return $item;
            });

        $wisatakuilner = wisataKuliner::where('nama', 'LIKE', "%{$query}%")
            ->orWhere('lokasi', 'LIKE', "%{$query}%")
            ->orWhere('berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('email_sosmed', 'LIKE', "%{$query}%")
            ->orWhere('jenis_layanan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'wisata_kuliner';
                return $item;
            });

        $pdam = pdam::where('nama_pelanggan', 'LIKE', "%{$query}%")
            ->orWhere('kategori', 'LIKE', "%{$query}%")
            ->orWhere('nama_am', 'LIKE', "%{$query}%")
            ->orWhere('alamat', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten', 'LIKE', "%{$query}%")
            ->orWhere('concat', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->orWhere('pelayanan', 'LIKE', "%{$query}%")
            ->orWhere('koordinat', 'LIKE', "%{$query}%")
            ->orWhere('email_pic', 'LIKE', "%{$query}%")
            ->orWhere('no_hp_pic', 'LIKE', "%{$query}%")
            ->orWhere('sosmed_pic', 'LIKE', "%{$query}%")
            ->orWhere('tersedia_layanan', 'LIKE', "%{$query}%")
            ->orWhere('status_berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('jenis_layanan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'pdam';
                return $item;
            });

        $perusahaan = perusahaan::where('nama', 'LIKE', "%{$query}%")
            ->orWhere('alamat', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->orWhere('pelayanan', 'LIKE', "%{$query}%")
            ->orWhere('titik_koordinat', 'LIKE', "%{$query}%")
            ->orWhere('berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('no_telp', 'LIKE', "%{$query}%")
            ->orWhere('jenis_layanan', 'LIKE', "%{$query}%")
            ->orWhere('status_berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('tersedia_layanan', 'LIKE', "%{$query}%")
            ->orWhere('sosmed_email_pic', 'LIKE', "%{$query}%")
            ->orWhere('ket', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'perusahaan';
                return $item;
            });

        $bpr = bpr::where('nama_pelanggan', 'LIKE', "%{$query}%")
            ->orWhere('nama_am', 'LIKE', "%{$query}%")
            ->orWhere('alamat', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->orWhere('pelayanan', 'LIKE', "%{$query}%")
            ->orWhere('koordinat', 'LIKE', "%{$query}%")
            ->orWhere('email_pic', 'LIKE', "%{$query}%")
            ->orWhere('no_hp', 'LIKE', "%{$query}%")
            ->orWhere('sosmed_pic', 'LIKE', "%{$query}%")
            ->orWhere('tersedia_layanan', 'LIKE', "%{$query}%")
            ->orWhere('status_berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('jenis_layanan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'bpr';
                return $item;
            });

        $stasiuntv = stasiuntv::where('nama_pelanggan', 'LIKE', "%{$query}%")
            ->orWhere('kategori', 'LIKE', "%{$query}%")
            ->orWhere('nama_pelanggan', 'LIKE', "%{$query}%")
            ->orWhere('nama_am', 'LIKE', "%{$query}%")
            ->orWhere('alamat', 'LIKE', "%{$query}%")
            ->orWhere('kecamatan', 'LIKE', "%{$query}%")
            ->orWhere('kabupaten', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->orWhere('pelayanan', 'LIKE', "%{$query}%")
            ->orWhere('koordinat', 'LIKE', "%{$query}%")
            ->orWhere('email_pic', 'LIKE', "%{$query}%")
            ->orWhere('no_hp_pic', 'LIKE', "%{$query}%")
            ->orWhere('sosmed_pic', 'LIKE', "%{$query}%")
            ->orWhere('tersedia_layanan', 'LIKE', "%{$query}%")
            ->orWhere('status_berlangganan', 'LIKE', "%{$query}%")
            ->orWhere('jenis_layanan', 'LIKE', "%{$query}%")
            ->get()
            ->map(function ($item) {
                $item->type = 'stasiuntv';
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
            ->merge($stasiuntv)
            ->merge($wisatakuilner);

        return view('search.index', ['results' => $results, 'query' => $query]);
    }
}
