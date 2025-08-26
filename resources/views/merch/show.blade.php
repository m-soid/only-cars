@extends('layouts.main')

@section('title', 'Welcome to Only Cars')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">

        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 flex flex-col pt-5">
            @if($merch['gambar_merch'])
                <img src="{{ asset('storage/'.$merch['gambar_merch']) }}" 
                     class="w-full h-96 object-cover rounded-xl mb-3">
            @endif

            <h2 class="text-3xl font-semibold">{{ $merch->nama_merch }}</h2>
            <p class="text-gray-500 text-lg font-semibold mt-1">Rp {{ number_format($merch['harga_merch'], 0, ',', '.') }}</p>
            <p class="text-gray-600 text-xl font-semibold">{{ $merch['deskripsi_merch'] }}</p>

            <div class="mt-4 flex gap-2">
                <a href="/merch" 
                   class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-lg font-semibold text-md">Back</a>
                <a href="{{ route('merch.edit',$merch->id) }}" 
                   class="px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded-lg font-semibold text-md">Edit</a>
                <form action="{{ route('merch.destroy',$merch->id) }}" method="POST" 
                      onsubmit="return confirm('Yakin hapus merch ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-lg font-semibold text-md">Hapus</button>
                </form>
            </div>
        </div>

</div>
@endsection