<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sma;

class smaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sma = Sma::orderBy('created_at', 'DESC')->get();

        return view('sma.index', compact('sma'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sma.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'nullable|string',
            'alamat' => 'nullable|string',
            'status' => 'nullable|string',
            'jumlah_siswa' => 'nullable|integer',
            'kecamatan' => 'nullable|string',
            'kabupaten/kota' => 'nullable|string',
            'provinsi' => 'nullable|string',
            'jaringan_optik' => 'nullable|string',
            'odp' => 'nullable|string',
            'layanan_telkom' => 'nullable|string',
        ]);

        Sma::create($data);

        return redirect()->route('sma')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sma = Sma::findOrFail($id);
  
        return view('sma.show', compact('sma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sma = Sma::findOrFail($id);
  
        return view('sma.edit', compact('sma'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sma = Sma::findOrFail($id);
  
        $sma->update($request->all());
  
        return redirect()->route('sma')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sma = Sma::findOrFail($id);
  
        $sma->delete();
  
        return redirect()->route('sma')->with('success', 'Data berhasil di hapus');
    }
}
