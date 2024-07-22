<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\univ;

class univController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $univ = univ::orderBy('created_at', 'DESC')->get();

        return view('universitas.index', compact('univ'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_univ' => 'nullable|string',
            'status' => 'nullable|string',
            'alamat' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kabupaten' => 'nullable|string',
            'am' => 'nullable|string',
            'layanan_telkom' => 'nullable|string',
        ]);

        univ::create($data);

        return redirect()->route('univ')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $univ = univ::findOrFail($id);

        return view('universitas.show', compact('univ'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $univ = univ::findOrFail($id);

        return view('universitas.edit', compact('univ'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $univ = univ::findOrFail($id);

        $univ->update($request->all());

        return redirect()->route('univ')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $univ = univ::findOrFail($id);

        $univ->delete();

        return redirect()->route('univ')->with('success', 'Data berhasil di hapus');
    }
}
