@extends('layouts.main')

@section('title', 'Welcome to Only Cars')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Daftar Merch</h1>
    <a href="{{ route('merch.create') }}" class="bg-gray-800 hover:bg-gray-900 font-medium text-sm text-white px-4 py-2 rounded-lg shadow">
        + Tambah Merch
    </a>
</div>


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

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