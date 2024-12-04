<?php

namespace App\Http\Controllers;

use App\Models\Distribusi;
use Illuminate\Http\Request;

class DistribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $distribusi = Distribusi::all();
        return view('Distribusi.index', compact('distribusi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Distribusi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DistribusiRequest $request)
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
    public function show(Distribusi $distribusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $distribusi = Distribusi::findOrFail($id);
        return view('Distribusi.edit', compact('distribusi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Distribusi $distribusi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Distribusi $distribusi)
    {
        //
    }
}
