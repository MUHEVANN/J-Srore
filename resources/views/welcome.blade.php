@extends('layout.template')
@section('konten')
    {{-- hero --}}
    <div class="w-full h-[80vh] flex">
        {{-- foto pertama --}}
        <div class="w-full h-full bg-[#DEE3E6] hero1 bg-no-repeat bg-right px-[80px] flex flex-col justify-center">
            <h1 class="font-bold text-[40px]">SIMPLE YOUR DAY</h1>
            <h1 class="font-bold text-[40px]">WITH SIMPLE OUTFIT</h1>
            <p class="text-[20px]">Get Promo In Last Mont</p>
            <div>
                <button class="px-6 py-2 bg-[#666666] text-white"><a href="">Shop Now</a></button>
            </div>
        </div>

        {{-- /foto pertama --}}
        {{-- foto kedua --}}
        <div class="flex flex-col w-[75%]">
            <div
                class="hero2 bg-[#8D9EB3] w-full h-full bg-no-repeat bg-[100%] px-5 flex flex-col justify-center object-contain">
                <h1 class="font-bold text-[40px]">Men's</h1>
                <h1 class="font-bold text-[40px]">Summer Sneakers</h1>
                <p class="text-[20px]">Big Sale On The Week</p>
                <div>
                    <button class="px-6 py-2 bg-[#666666] text-white"><a href="">Shop Now</a></button>
                </div>
            </div>
            <div
                class="hero3 bg-[#D9D9D9] w-full h-full bg-no-repeat bg-right px-5 flex flex-col justify-center object-cover">
                <h1 class="font-bold text-[40px]">Men's</h1>
                <h1 class="font-bold text-[40px]">Simple Outfit</h1>
                <p class="text-[20px]">Big Sale On The Week</p>
                <div>
                    <button class="px-6 py-2 bg-[#666666] text-white"><a href="">Shop Now</a></button>
                </div>
            </div>
        </div>
        {{-- /foto kedua --}}
    </div>
    {{-- /hero --}}
    {{-- Card Product --}}
    <div class="w-full mt-[15px] flex flex-col items-center">
        <h1 class="font-medium text-[40px]">New Arrivals</h1>
        <p class="text-[20px]">Get New Product from J Store and claim free delivery </p>
    </div>

    <div class="w-full h-auto px-[80px] grid gap-5 grid-cols-4 mt-5  ">
        @foreach ($data as $item)
            <div class="w-[329px]  h-auto border flex flex-col">
                <a href="{{ url('home/' . $item->id) }}"><img src="{{ asset('foto/' . $item->foto) }}" alt=""
                        class="w-full h-[370px] object-cover" /></a>
                <div class="flex justify-between p-5 items-center">
                    <div>
                        <h1 class="font-bold text-[20px]">
                            {{ $item->nama }}
                        </h1>
                        <h2 class="text-[16px]">
                            Rp.{{ $item->harga }}
                        </h2>
                    </div>
                    <div class="border p-2 rounded-full bg-gray-100"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                        </svg>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- /Card Product --}}


    {{-- banner Link --}}
    <div class="w-full h-[700px] grid grid-cols-3  gap-x-3 items-center">
        <div class="w-full h-[552px] cols-span-1 relative">
            <img src="{{ asset('foto/banner.jpg') }}" alt="" class="w-full h-full object-cover" />
            <button class="px-6 py-2 text-white bg-[#666666] absolute bottom-[20%] left-[15%] "><a href=""
                    class="flex gap-x-1">Mens's
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a></button>
        </div>
        <div class="w-full h-[552px] cols-span-1 relative">
            <img src="{{ asset('foto/banner-shoes.webp') }}" alt="" class="w-full h-full object-cover" />
            <button class="px-6 py-2 text-white bg-[#666666] absolute bottom-[20%] left-[15%]"><a href=""
                    class="flex gap-x-1">Shoes <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a></button>
        </div>
        <div class="w-full h-[552px] cols-span-1 relative">
            <img src="{{ asset('foto/jihyo.jpg') }}" alt="" class="w-full h-full object-cover" />
            <button class="px-6 py-2 text-white bg-[#666666] absolute bottom-[20%] left-[15%]"><a href=""
                    class="flex gap-x-1">Women <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a></button>
        </div>

    </div>
    {{-- /banner Link --}}
@endsection
