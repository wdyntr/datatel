<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bpr;

class bprController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bpr = bpr::orderBy('created_at', 'DESC')->get();

        return view('bpr.index', compact('bpr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bpr.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_pelanggan' => 'nullable|string',
            'nama_am' => 'nullable|string',
            'alamat' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kabupaten' => 'nullable|string',
            'provinsi' => 'nullable|string',
            'pelayanan' => 'nullable|string',
            'koordinat' => 'nullable|string',
            'email_pic' => 'nullable|string',
            'no_hp' => 'nullable|string',
            'sosmed_pic' => 'nullable|string',
            'tersedia_layanan' => 'nullable|string',
            'status_berlangganan' => 'nullable|string',
            'jenis_layanan' => 'nullable|string',

        ]);

        bpr::create($data);

        return redirect()->route('bpr')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bpr = bpr::findOrFail($id);

        return view('bpr.show', compact('bpr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bpr = bpr::findOrFail($id);

        return view('bpr.edit', compact('bpr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bpr = bpr::findOrFail($id);

        $bpr->update($request->all());

        return redirect()->route('bpr')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bpr = bpr::findOrFail($id);

        $bpr->delete();

        return redirect()->route('bpr')->with('success', 'Data berhasil di hapus');
    }
}
