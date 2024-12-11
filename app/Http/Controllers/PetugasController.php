<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = Petugas::all();
        return view('Petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('Petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        $validated = $request->validated();
        $petugas = Petugas::findOrFail($id);
        $petugas->update($validated);
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        //
    }
}
