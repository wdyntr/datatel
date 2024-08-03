<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisataKuliner;

class wisata_kulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisataKuliner = wisataKuliner::orderBy('created_at', 'DESC')->paginate(10);

        return view('wisata_kuliner.index', compact('wisataKuliner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wisata_kuliner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'nullable|string',
            'lokasi' => 'nullable|string',
            'berlangganan' => 'nullable|string',
            'email_sosmed' => 'nullable|string',
            'jenis_layanan' => 'nullable|string',
        ]);

        wisataKuliner::create($data);

        return redirect()->route('wisata_kuliner')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $wisataKuliner = wisataKuliner::findOrFail($id);

        return view('wisata_kuliner.show', compact('wisataKuliner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wisataKuliner = wisataKuliner::findOrFail($id);

        return view('wisata_kuliner.edit', compact('wisataKuliner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $wisataKuliner = wisataKuliner::findOrFail($id);

        $wisataKuliner->update($request->all());

        return redirect()->route('wisata_kuliner')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wisataKuliner = wisataKuliner::findOrFail($id);

        $wisataKuliner->delete();

        return redirect()->route('wisata_kuliner')->with('success', 'Data berhasil di hapus');
    }
}
