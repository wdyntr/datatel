<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wisata_lamsel;

class wisata_lamselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisata_lamsel = wisata_lamsel::orderBy('created_at', 'DESC')->get();

        return view('wisata_lamsel.index', compact('wisata_lamsel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wisata_lamsel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'nullable|string',
            'lokasi' => 'nullable|string',
            'tikor' => 'nullable|string',
            'berlangganan' => 'nullable|string',
            'email_sosmed' => 'nullable|string',
            'jenis_layanan' => 'nullable|string',
        ]);

        wisata_lamsel::create($data);

        return redirect()->route('wisata_lamsel')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $wisata_lamsel = wisata_lamsel::findOrFail($id);

        return view('wisata_lamsel.show', compact('wisata_lamsel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wisata_lamsel = wisata_lamsel::findOrFail($id);

        return view('wisata_lamsel.edit', compact('wisata_lamsel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $wisata_lamsel = wisata_lamsel::findOrFail($id);

        $wisata_lamsel->update($request->all());

        return redirect()->route('wisata_lamsel')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wisata_lamsel = wisata_lamsel::findOrFail($id);

        $wisata_lamsel->delete();

        return redirect()->route('wisata_lamsel')->with('success', 'Data berhasil di hapus');
    }
}
