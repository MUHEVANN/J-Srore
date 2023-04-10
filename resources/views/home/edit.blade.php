@extends('layout.template')
@section('konten')
    <div class="px-[80px] mb-2">
        <button class="px-4 py-2 bg-[#666666] text-white  ">
            <a href="{{ url('home') }}" class="flex gap-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>Kembali

            </a>
        </button>

    </div>
    <div class="w-full h-auto px-[80px] justify-center items-center flex my-6">
        <div class="w-full h-auto p-5 bg-gray-100">
            <h1 class="font-bold mb-5">Add Product</h1>
            <div class="w-full flex justify-center">
                <img src="{{ asset('foto/' . $data->foto) }}" alt="" class="w-[300px] h-[300px]" />
            </div>
            <form action='{{ url('home/' . $data->id) }}' method="POST" class="grid grid-cols-2 gap-2"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <form-group class="flex flex-col">
                    <label for="nama">Nama Product</label>
                    <input type="text" name="nama" value="{{ $data->nama }}"
                        class="px-2 py-2 rounded-md outline-none">
                </form-group>
                <form-group class="flex flex-col">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" value="{{ $data->harga }}"
                        class="px-2 py-2 rounded-md outline-none">
                </form-group>
                <form-group class="flex flex-col">
                    <label for="Jenis">Jenis Product</label>
                    <select name="category_id" value="" class="px-2 py-2 rounded-md outline-none">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </form-group>
                <form-group class="flex flex-col">
                    <label for="Jenis">Jenis Kelamin</label>
                    <select name="gender" id="" class="px-2 py-2 rounded-md outline-none">
                        <option value="">Pilih Kategori</option>
                        <option value="L" {{ $data->gender == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="P" {{ $data->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </form-group>
                <form-group class="flex flex-col">
                    <label for="stok">Stock Product</label>
                    <input type="number" value="{{ $data->stock }}" name="stock"
                        class="px-2 py-2 rounded-md outline-none">
                </form-group>
                <form-group class="flex flex-col">
                    <label for="desc">Deskripsi Product</label>
                    <textarea rows="5" type="text" name="desc" class="px-2 py-2 rounded-md outline-none">{{ $data->desc }}</textarea>
                </form-group>
                <form-group class="flex flex-col">
                    <label for="foto">Foto Product</label>
                    <input type="file" value="" name="foto" class="px-2 py-2 rounded-md outline-none">
                </form-group>
                <div><button type="submit" class="px-4 gap-x-1 py-2 bg-[#666666] text-white mt-3 flex">Change Product<svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </button></div>
            </form>
        </div>
    </div>
@endsection
