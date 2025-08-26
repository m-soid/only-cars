<?php

namespace App\Http\Controllers;

use App\Models\merch;
use Illuminate\Http\Request;

class merchs extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merch = merch::all();
        return view('merch', compact('merch'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("merch.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $ValidatedData = $request->validate([
            'nama_merch' => 'required|string',
            'harga_merch' => 'required|numeric',
            'deskripsi_merch' => 'required|string',
            'gambar_merch' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar_merch')) {
            $path = $request -> file('gambar_merch')->store('merch_images', 'public');
            $ValidatedData['gambar_merch'] = $path;
        }

        merch::create($ValidatedData);
        return redirect('/merch');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $merch = merch::findOrFail($id);
        return view('merch.show', compact('merch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merch = merch::findOrFail($id);
        return view('merch.edit', compact('merch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $merch = merch::findOrFail($id);

        $ValidatedData = $request->validate([
            'nama_merch' => 'required|string',
            'harga_merch' => 'nullable|numeric',
            'deskripsi_merch' => 'required|string',
            'gambar_merch' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar_merch')) {
            $path = $request -> file('gambar_merch')->store('merch_images', 'public');
            $ValidatedData['gambar_merch'] = $path;
        }

        $merch->update($ValidatedData);
        return redirect('/merch');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merch = merch::findOrFail($id);
        $merch->delete();
        return redirect('/merch');
    }
}
