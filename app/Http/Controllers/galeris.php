<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;

class galeris extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = galeri::all();
        return view('galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("galeri.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $ValidatedData = $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'judul' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request -> file('gambar')->store('images', 'public');
            $ValidatedData['gambar'] = $path;
        }

        galeri::create($ValidatedData);
        return redirect('/gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $galeri = galeri::findOrFail($id);
        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galeri = galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galeri = galeri::findOrFail($id);

        $ValidatedData = $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png',
            'judul' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $path = $request -> file('gambar')->store('images', 'public');
            $ValidatedData['gambar'] = $path;
        }

        $galeri->update($ValidatedData);
        return redirect('/gallery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = galeri::findOrFail($id);
        $galeri->delete();
        return redirect('/gallery');
    }
}
