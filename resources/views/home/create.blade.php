@extends('layout.template')
@section('konten')
    @if ($errors->any())
        <div class="w-full flex justify-center">

            <div class="alert alert-error shadow-lg w-[500px]">
                <div>

                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>
                                {{ $item }}
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="w-full h-[80vh] px-[80px] justify-center items-center flex my-6">


        <div class="w-full g bg-[#F7F7F7] border rounded-md p-5">
            <h1 class="font-bold mb-5">Add Product</h1>
            <form action='{{ url('home') }}' method="POST" class="grid grid-cols-2 gap-5" enctype="multipart/form-data">
                @csrf
                <form-group class="flex flex-col">
                    <label for="nama">Nama Product</label>
                    <input type="text" name="nama" class="px-2 py-2 rounded-md outline-none">
                </form-group>
                <form-group class="flex flex-col">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="px-2 py-2 rounded-md outline-none">
                </form-group>
                <form-group class="flex flex-col">
                    <label for="Jenis">Jenis Product</label>
                    <select name="category_id" id="" class="px-2 py-2 rounded-md outline-none">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </form-group>
                <form-group class="flex flex-col">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="gender" id="" class="px-2 py-2 rounded-md outline-none">
                        <option value="">Pilih Kategori</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </form-group>
                <form-group class="flex flex-col">
                    <label for="stok">Stock Product</label>
                    <input type="number" name="stock" class="px-2 py-2 rounded-md outline-none">
                </form-group>
                <form-group class="flex flex-col">
                    <label for="desc">Deskripsi Product</label>
                    <textarea rows="5" type="text" name="desc" class="px-2 py-2 rounded-md outline-none"></textarea>
                </form-group>
                <form-group class="flex flex-col">
                    <label for="foto">Foto Product</label>
                    <input type="file" name="foto" class="px-2 py-2 rounded-md outline-none">
                </form-group>
                <div><button type="submit" class="px-6 py-2 bg-[#666666] text-white mt-3 flex gap-x-1">Add
                        Product<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </button></div>
            </form>
        </div>

    </div>
@endsection
