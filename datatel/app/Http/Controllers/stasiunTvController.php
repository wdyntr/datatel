<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StasiunTv;

class StasiuntvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stasiuntv = StasiunTv::orderBy('created_at', 'DESC')->paginate(10);

        return view('stasiuntv.index', compact('stasiuntv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stasiuntv.create');
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
            'provinsi' => 'nullable|string',
            'pelayanan' => 'nullable|string',
            'koordinat' => 'nullable|string',
            'email_pic' => 'nullable|string',
            'no_hp_pic' => 'nullable|string',
            'sosmed_pic' => 'nullable|string',
            'tersedia_layanan' => 'nullable|string',
            'status_berlangganan' => 'nullable|string',
            'jenis_layanan' => 'nullable|string',

        ]);

        StasiunTv::create($data);

        return redirect()->route('stasiuntv')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stasiuntv = StasiunTv::findOrFail($id);

        return view('stasiuntv.show', compact('stasiuntv'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stasiuntv = StasiunTv::findOrFail($id);

        return view('stasiuntv.edit', compact('stasiuntv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stasiuntv = StasiunTv::findOrFail($id);

        $stasiuntv->update($request->all());

        return redirect()->route('stasiuntv')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stasiuntv = StasiunTv::findOrFail($id);

        $stasiuntv->delete();

        return redirect()->route('stasiuntv')->with('success', 'Data berhasil di hapus');
    }
}
