@extends('layouts.main')

@section('title', 'Welcome to Only Cars')

@section('content')
<div class="flex justify-center items-center mb-6">
    <img src="{{ asset('storage/img/159990929a963a35bbda535a78edf000.jpg') }}" 
     class="h-100 w-300 object-cover object-center rounded-xl mb-3">
</div>

<div class="flex justify-center items-center mb-6">
    <h1 class="text-5xl font-bold text-gray-800 mt-5 mb-15">Welcome to Only Cars</h1>
</div>

<div class="flex justify-between items-center mb-6">
    <h1 class="text-4xl font-bold text-gray-800 ms-2">Event</h1>
    <a href="/event" class="bg-gray-800 hover:bg-gray-900 font-medium text-sm text-white px-4 py-2 me-2 rounded-lg shadow">
        Lihat Event
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-3">
    @foreach($event as $e)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 flex flex-col">
            @if($e['gambar_event'])
                <img src="{{ asset('storage/'.$e['gambar_event']) }}" 
                     class="w-full h-48 object-cover rounded-xl mb-3">
            @endif

            <h2 class="text-xl font-semibold">{{ $e['nama_event'] }}</h2>
            <p class="text-gray-500 text-sm">{{ $e['date_event'] }} | {{ $e['lokasi_event'] }}</p>

            <div class="mt-4 flex gap-2 justify-end">
                <a href="{{ route('event.show', $e->id) }}" 
                   class="px-5 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg text-sm font-semibold">Detail</a>
            </div>
        </div>
    @endforeach
</div>


<div class="flex justify-between items-center mb-6 mt-20">
    <h1 class="text-4xl font-bold text-gray-800 ms-2">Gallery</h1>
    <a href="/gallery" class="bg-gray-800 hover:bg-gray-900 font-medium text-sm text-white px-4 py-2 me-2 rounded-lg shadow">
        Lihat Gallery
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


<div class="flex justify-between items-center mb-6 mt-20">
    <h1 class="text-4xl font-bold text-gray-800 ms-2">Merch</h1>
    <a href="/merch" class="bg-gray-800 hover:bg-gray-900 font-medium text-sm text-white px-4 py-2 me-2 rounded-lg shadow">
        Lihat Merch
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-3">
    @foreach($merch as $e)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 flex flex-col">
            @if($e['gambar_merch'])
                <img src="{{ asset('storage/'.$e['gambar_merch']) }}" 
                     class="w-full h-48 object-cover rounded-xl mb-3">
            @endif

            <h2 class="text-xl font-semibold">{{ $e['nama_merch'] }}</h2>
            <p class="text-gray-500 text-sm">Rp {{ number_format($e['harga_merch'], 0, ',', '.') }}</p>

            <div class="mt-4 flex gap-2 justify-end">
                <a href="{{ route('merch.show', $e->id) }}" 
                   class="px-5 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg text-sm font-semibold">Detail</a>
            </div>
        </div>
    @endforeach
</div>

@endsection