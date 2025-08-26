@extends('layouts.main')

@section('title', 'Form Tambah event')

@section('content')

    <form action="{{ route('merch.store') }} " method="POST" enctype="multipart/form-data"
     class="p-7 rounded-xl mt-10 mb-10">
     @csrf
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Nama merch</label>
            <input type="text" name="nama_merch" id="nama_merch" placeholder="Masukan nama merch"
                class=" border border-gray-300 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Harga</label>
            <input type="number" name="harga_merch" id="harga_merch" placeholder="Masukan harga merch"
                class=" border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Deskripsi</label>
            <input type="text" name="deskripsi_merch" id="deskripsi_merch" placeholder="Masukan deskripsi merch"
                class=" border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-800">Gambar merch</label>
            <input type="file" name="gambar_merch" id="gambar_merch" placeholder=""
                class=" border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
                <a href="/merch" 
                   class=" font-medium px-5 py-2.5 me-2 mb-2 bg-green-500 hover:bg-green-700 text-white rounded-lg text-sm">Back</a>

        <button type="submit"
            class="text-white bg-gray-900 hover:bg-gray-800 focus:ring-1 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 
             dark:bg-gray-700 dark:border-gray-900 dark:hover:bg-gray-900 focus:outline-none dark:focus:ring-gray-900">Submit</button>
    </form>

@endsection