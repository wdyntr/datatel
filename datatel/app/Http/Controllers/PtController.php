<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perusahaan;

class PtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perusahaan = perusahaan::orderBy('created_at', 'DESC')->paginate(10);

        return view('perusahaan.index', compact('perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'nullable|string',
            'alamat' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kabupaten' => 'nullable|string',
            'provinsi' => 'nullable|string',
            'pelayanan' => 'nullable|string',
            'titik_koordinat' => 'nullable|string',
            'berlangganan' => 'nullable|string',
            'no_telp' => 'nullable|string',
            'jenis_layanan' => 'nullable|string',
            'status_berlangganan' => 'nullable|string',
            'tersedia_layanan' => 'nullable|string',
            'sosmed_email_pic' => 'nullable|string',
            'ket' => 'nullable|string',

        ], [
            'no_telp.max' => 'Nomor telepon tidak boleh lebih dari 20 karakter.',
        ]);

        perusahaan::create($data);

        return redirect()->route('perusahaan')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perusahaan = perusahaan::findOrFail($id);

        return view('perusahaan.show', compact('perusahaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perusahaan = perusahaan::findOrFail($id);

        return view('perusahaan.edit', compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $perusahaan = perusahaan::findOrFail($id);

        $perusahaan->update($request->all());

        return redirect()->route('perusahaan')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perusahaan = perusahaan::findOrFail($id);

        $perusahaan->delete();

        return redirect()->route('perusahaan')->with('success', 'Data berhasil di hapus');
    }
}
