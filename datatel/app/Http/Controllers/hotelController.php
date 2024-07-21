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
            'nama_akomodasi' => 'nullable|string',
            'klasifikasi' => 'nullable|string',
            'alamat' => 'nullable|string',
            'no_telp' => 'nullable|string',
            'jumlah_kamar' => 'nullable|integer',
            'jumlah_tempat_tidur' => 'nullable|string',
            'kabupaten' => 'nullable|string',
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
