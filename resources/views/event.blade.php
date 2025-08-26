@extends('layouts.main')

@section('title', 'Welcome to Only Cars')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Daftar Event</h1>
    <a href="{{ route('event.create') }}" class="bg-gray-800 hover:bg-gray-900 font-medium text-sm text-white px-4 py-2 rounded-lg shadow">
        + Tambah Event
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
@endsection