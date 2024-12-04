<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use Illuminate\Http\Request;
use App\Http\Requests\ProduksiRequest;

class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produksi = Produksi::all();
        return view('Produksi.index', compact('produksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validated();

        Produksi::create([
            'kebun_id' => $validated['kebun_id'],
            'jumlah_tandan' => $validated['jumlah_tandan'],
            'berat_total' => $validated['berat_total'],
            'tanggal_panen' => $validated['tanggal_panen'],
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('tanggalpanen.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produksi $produksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produksi $id)
    {
        $produksi= Produksi::findOrFail($id);
        return view('Produksi.edit', compact('produksi'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(ProduksiRequest $request, $id)
    {
        $validated = $request->validated();
        $produksi = Produksi::findOrFail($id);
        $produksi->update($validated);

        return redirect()->route('Produksi.index');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $produksi = Produksi::findOrFail($id);
        $produksi->delete();

        return redirect()->route('produksi.index');
    }
}
