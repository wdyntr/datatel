<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cafe;

class cafeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cafe = cafe::orderBy('created_at', 'DESC')->get();

        return view('cafe.index', compact('cafe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cafe.create');
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

        cafe::create($data);

        return redirect()->route('cafe')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cafe = cafe::findOrFail($id);

        return view('cafe.show', compact('cafe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cafe = cafe::findOrFail($id);

        return view('cafe.edit', compact('cafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cafe = cafe::findOrFail($id);

        $cafe->update($request->all());

        return redirect()->route('cafe')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cafe = cafe::findOrFail($id);

        $cafe->delete();

        return redirect()->route('cafe')->with('success', 'Data berhasil di hapus');
    }
}
