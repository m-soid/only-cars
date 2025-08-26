@extends('layouts.main')

@section('title', 'Welcome to Only Cars')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-xl rounded-2xl overflow-hidden">

        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 flex flex-col pt-5">
            @if($galeri['gambar'])
                <img src="{{ asset('storage/'.$galeri['gambar']) }}" 
                     class="w-full h-108 object-cover rounded-xl mb-3">
            @endif

            <h2 class="text-3xl font-semibold">{{ $galeri->judul }}</h2>

            <div class="mt-4 flex gap-2">
                <a href="/gallery" 
                   class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-lg font-semibold text-md">Back</a>
                <a href="{{ route('gallery.edit',$galeri->id) }}" 
                   class="px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded-lg font-semibold text-md">Edit</a>
                <form action="{{ route('gallery.destroy',$galeri->id) }}" method="POST" 
                      onsubmit="return confirm('Yakin hapus gallery ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-lg font-semibold text-md">Hapus</button>
                </form>
            </div>
        </div>

</div>
@endsection