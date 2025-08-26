@extends('layouts.main')

@section('title', 'Form Tambah Gallery')

@section('content')

    <form action="{{ route('gallery.update', $galeri->id) }} " method="POST" enctype="multipart/form-data"
     class="p-7 rounded-xl mt-10 mb-10">
     @csrf
     @method('PUT')
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Judul</label>
            <input type="text" name="judul" id="judul" placeholder="Masukan Judul"
            value="{{ old('judul', $galeri['judul']) }}"
                class=" border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>


            <div class="mt-4 flex gap-2">
                <a href="/gallery/{{ $galeri->id }}" 
                   class=" font-medium px-5 py-2.5 me-2 mb-2 bg-green-500 hover:bg-green-700 text-white rounded-lg text-sm">Back</a>
                <button type="submit" 
                   class=" font-medium px-5 py-2.5 me-2 mb-2 bg-gray-700 hover:bg-gray-900 text-white rounded-lg text-sm">Submit</button>
            </div>
    </form>

@endsection