<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
// Suggested code may be subject to a license. Learn more: ~LicenseLog:4293575342.
use App\Http\Requests\PenggunaRequest;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('Pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PenggunaRequest $request)
    {
        $validated = $request->validated();

        Pengguna::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => $validated['role'],
        ]);
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil ditambahkan.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('Pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PenggunaRequest $request, $id)
    {
        $validated = $request->validated();
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->update($validated);
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('pengguna.index');
    }
}
