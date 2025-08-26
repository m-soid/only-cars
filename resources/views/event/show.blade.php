@extends('layouts.main')

@section('title', 'Welcome to Only Cars')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">

        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 flex flex-col pt-5">
            @if($event['gambar_event'])
                <img src="{{ asset('storage/'.$event['gambar_event']) }}" 
                     class="w-full h-96 object-cover rounded-xl mb-3">
            @endif

            <h2 class="text-3xl font-semibold">{{ $event->nama_event }}</h2>
            <p class="text-gray-500 text-lg">{{ $event['date_event'] }} | {{ $event['lokasi_event'] }}</p>
            <p class="text-gray-600 text-xl font-semibold">{{ $event['deskripsi_event'] }}</p>

            <div class="mt-4 flex gap-2">
                <a href="/event" 
                   class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-lg font-semibold text-md">Back</a>
                <a href="{{ route('event.edit',$event->id) }}" 
                   class="px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded-lg font-semibold text-md">Edit</a>
                <form action="{{ route('event.destroy',$event->id) }}" method="POST" 
                      onsubmit="return confirm('Yakin hapus event ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-lg font-semibold text-md">Hapus</button>
                </form>
            </div>
        </div>

</div>
@endsection