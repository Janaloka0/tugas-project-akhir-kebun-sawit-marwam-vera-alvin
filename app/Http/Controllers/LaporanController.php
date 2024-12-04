<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = Laporan::all();
        return view('Laporan.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LaporanRequest $request)
    {
        $validated = $request->validated();

        Laporan::create([
            'kebun_id' => $validated['kebun_id'],
            'file_path' => $validated['file_path'],
            'file_type' => bcrypt($validated['file_type']),
            'tanggal_laporan' => $validated['tanggal_laporan'],
        ]);
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('laporan.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        $laporan = Laporan::findOrFail($id);
        return view('Laporan.edit', compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LaporanRequest $request,$id)
    {
        $validated = $request->validated();
        $laporan = Laporan::findOrFail($id);
        $laporan->update($validated);
        return redirect()->route('laporan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
        return redirect()->route('laporan.index');
    }
}
