<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Requests\PembayaranRequest;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validated();

        Pembayaran::create([
            'id_produksi' => $validated['id_produksi'],
            'jumlah_pembayaran' => $validated['jumlah_pembayaran'],
            'tanggal_pembayaran' => $validated['tanggal_pembayaran'],
            'metode_pembayaran' => $validated['metode_pembayaran'],
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pembayaran.index')->with('success', 'Pengguna berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('Pembayaran.edit', compact('Pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $id)
    {
        $validated = $request->validated();
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($validated);
        return redirect()->route('pembayaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index');
    }
}
