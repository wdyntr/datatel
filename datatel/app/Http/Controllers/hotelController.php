<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotel;

class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotel = hotel::orderBy('created_at', 'DESC')->get();

        return view('hotel.index', compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotel.create');
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
            'sosmed_pic' => 'nullable|string',
            'tersedia_layanan' => 'nullable|string',
            'status_berlangganan' => 'nullable|string',
            'jenis_layanan' => 'nullable|string',
        ]);

        hotel::create($data);

        return redirect()->route('hotel')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotel = hotel::findOrFail($id);

        return view('hotel.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hotel = hotel::findOrFail($id);

        return view('hotel.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotel = hotel::findOrFail($id);

        $hotel->update($request->all());

        return redirect()->route('hotel')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = hotel::findOrFail($id);

        $hotel->delete();

        return redirect()->route('hotel')->with('success', 'Data berhasil di hapus');
    }
}
