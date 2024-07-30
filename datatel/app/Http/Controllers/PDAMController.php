<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pdam;

class PDAMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pdam = pdam::orderBy('created_at', 'DESC')->get();

        return view('pdam.index', compact('pdam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pdam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kategori' => 'nullable|string',
            'nama_pelanggan' => 'nullable|string',
            'nama_am' => 'nullable|string',
            'alamat' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kabupaten' => 'nullable|string',
            'concat' => 'nullable|string',
            'provinsi' => 'nullable|string',
            'pelayanan' => 'nullable|string',
            'koordinat' => 'nullable|string',
            'email_pic' => 'nullable|string',
            'no_hp_pic' => 'nullable|integer',
            'tersedia_layanan' => 'nullable|string',
            'status_berlangganan' => 'nullable|string',
            'jenis_layanan' => 'nullable|string',
        ], [
            'no_hp_pic.integer' => 'No HP PIC harus berupa bilangan bulat.',
        ]);

        pdam::create($data);

        return redirect()->route('pdam')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pdam = pdam::findOrFail($id);

        return view('pdam.show', compact('pdam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pdam = pdam::findOrFail($id);

        return view('pdam.edit', compact('pdam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pdam = pdam::findOrFail($id);

        $pdam->update($request->all());

        return redirect()->route('pdam')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pdam = pdam::findOrFail($id);

        $pdam->delete();

        return redirect()->route('pdam')->with('success', 'Data berhasil di hapus');
    }
}
