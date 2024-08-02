<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bank;


class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bank = bank::orderBy('created_at', 'DESC')->paginate(10);

        return view('bank.index', compact('bank'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_bank' => 'nullable|string',
            'alamat' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kabupaten/kota' => 'nullable|string',
            'am' => 'nullable|string',
            'layanan_telkom' => 'nullable|string',
        ]);

        Bank::create($data);

        return redirect()->route('bank')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bank = Bank::findOrFail($id);

        return view('bank.show', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bank = Bank::findOrFail($id);

        return view('bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bank = Bank::findOrFail($id);

        $bank->update($request->all());

        return redirect()->route('bank')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bank = Bank::findOrFail($id);

        $bank->delete();

        return redirect()->route('bank')->with('success', 'Data berhasil di hapus');
    }
}
