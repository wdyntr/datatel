<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faskes;

class faskesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faskes = faskes::orderBy('created_at', 'DESC')->get();

        return view('faskes.index', compact('faskes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faskes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_puskesmas' => 'nullable|string',
            'kode_puskesmas2' => 'nullable|string',
            'nama_puskes' => 'nullable|string',
            'treg' => 'nullable|string',
            'witel' => 'nullable|string',
            'alamat' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kabupaten' => 'nullable|string',
            'concat' => 'nullable|string',
            'provinsi' => 'nullable|string',
            'pelayanan' => 'nullable|string',
            'wilayah_kerja' => 'nullable|string',
            'lat' => 'nullable|string',
            'lon' => 'nullable|string',
            'lat_long' => 'nullable|string',
            'ketersediaan_jaringan_optik' => 'nullable|string',
            'layanan_telkom' => 'nullable|string',
            'kompetitor_eksisting' => 'nullable|string',
            'rekomendasi' => 'nullable|string',
        ]);

        faskes::create($data);

        return redirect()->route('faskes')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
