<?php

namespace App\Http\Controllers;

use App\Models\Kebun;
use Illuminate\Http\Request;
use App\Http\Requests\KebunRequest;

class KebunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kebun = Kebun::all();
        return view('Kebun.index', compact('kebun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kebun.create');
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
    public function show(Kebun $kebun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kebun = Kebun::findOrFail($id);
        return view('Kebun.edit', compact('kebun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KebunRequest $request,$id)
    {
        $validated = $request->validated();
        $kebun = Kebun::findOrFail($id);
        $kebun->update($validated);
        return redirect()->route('kebun.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kebun $kebun)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('pengguna.index');
    }
}
