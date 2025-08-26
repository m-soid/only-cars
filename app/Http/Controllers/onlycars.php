<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\merch;
use App\Models\galeri;
use App\Models\MobilCars;
use Illuminate\Http\Request;

class onlycars extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = event::take(3)->get();
        $merch = merch::take(3)->get();
        $galeri = galeri::take(3)->get();
        $mobil = MobilCars::all();
        return view('home',
         compact('mobil', 'galeri', 'merch', 'event')
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mobil.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $ValidatedData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            $path = $request -> file('gambar_mobil')->store('mobil_images', 'public');
            $ValidatedData['gambar_mobil'] = $path;
        }

        MobilCars::create($ValidatedData);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = MobilCars::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
