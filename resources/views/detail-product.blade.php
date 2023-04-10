@extends('layout.template')
@section('konten')
    <div class="px-[80px] w-full h-screen items-center  flex justify-center ">
        <div class="w-[800px] h-auto grid grid-cols-2 border">

            <div class="p-5 w-full h-full flex justify-center">

                <img src="{{ asset('foto/' . $data->foto) }}" alt="" class="w-[500px] h-[500px] object-cover">
            </div>
            <div class="p-5 flex flex-col gap-y-5">
                <div>

                    <h1 class="font-bold text-[40px]">{{ $data->nama }}</h1>
                    <p class="text-[14px]">SPRING SUMMER COLLECTION</p>
                </div>
                <div>

                    <select name="" id="">
                        <option value="">S</option>
                        <option value="">M</option>
                        <option value="">XL</option>
                    </select>
                </div>
                <p>{{ $data->desc }}</p>
                <h1>Rp.{{ $data->harga }}</h1>
                <div class="">
                    <button class="px-6 py-2 text-white bg-[#666666]">Add ToCart</button>
                </div>
            </div>
        </div>
    </div>
@endsection
