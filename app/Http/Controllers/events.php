<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class events extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = event::all();
        return view("event",compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("event.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $ValidatedData = $request->validate([
            'nama_event' => 'required|string',
            'date_event' => 'required|date',
            'lokasi_event' => 'required|string',
            'deskripsi_event' => 'required|string',
            'gambar_event' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar_event')) {
            $path = $request -> file('gambar_event')->store('event_images', 'public');
            $ValidatedData['gambar_event'] = $path;
        }

        event::create($ValidatedData);
        return redirect('/event');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = event::findOrFail($id);
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = event::findOrFail($id);
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = event::findOrFail($id);

        $ValidatedData = $request->validate([
            'nama_event' => 'required|string',
            'date_event' => 'required|date',
            'lokasi_event' => 'required|string',
            'deskripsi_event' => 'required|string',
            'gambar_event' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('gambar_event')) {
            $path = $request -> file('gambar_event')->store('event_images', 'public');
            $ValidatedData['gambar_event'] = $path;
        }

        $event->update($ValidatedData);
        return redirect('/event');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = event::findOrFail($id);
        $event->delete();
        return redirect('/');
    }
}
