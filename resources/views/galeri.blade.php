@extends('layouts.main')

@section('title', 'Welcome to Only Cars')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Gallery</h1>
    <a href="{{ route('gallery.create') }}" class="bg-gray-800 hover:bg-gray-900 font-medium text-sm text-white px-4 py-2 rounded-lg shadow">
        + Tambah Gallery
    </a>
</div>


<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-3">
    @foreach($galeri as $e)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 flex flex-col">
            @if($e['gambar'])
                <img src="{{ asset('storage/'.$e['gambar']) }}" 
                     class="w-full h-72 object-cover rounded-xl mb-3">
            @endif

            
            
            <h2 class="text-2xl mb-0 ms-2 font-bold">{{ $e['judul'] }}</h2>
            <div class="mt-0 flex gap-2 justify-end">
                <a href="{{ route('gallery.show', $e->id) }}" 
                   class="px-5 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg text-sm font-semibold">Detail</a>
            </div>
        </div>
    @endforeach
</div>
@endsection