<?php

namespace App\Http\Controllers;

use App\Models\Kategori_Panen;
use Illuminate\Http\Request;
use App\Http\Requests\kategoripanenRequest;

class KategoriPanenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_Panen = kategori_Panen::all();
        return view('kategoripanen.index', compact('kategoripanen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategoripanen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validated();

        Kategori_Panen::create([
            'name_kategori' => $validated['name_kategori'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kategoripanen.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori_Panen $kategori_Panen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori_Panen $id)
    {
        $kategori_Panen = Kategori_Panen::findOrFail($id);
        return view('kategoripanen.edit', compact('kategoripanen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori_Panen $id)
    {
        $validated = $request->validated();
        $kategoripanen = Kategori_Panen::findOrFail($id);
        $kategoripanen->update($validated);
        return redirect()->route('kategoripanen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori_Panen $id)
    {
        $kategoripanen = Kategori_Panen::findOrFail($id);
        $kategoripanen->delete();
        return redirect()->route('kategoripanen.index');
    }
}
