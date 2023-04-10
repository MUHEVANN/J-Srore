@extends('layout.template')
@section('konten')
    <div class="w-full h-auto px-[80px] grid gap-5 grid-cols-4 my-5  ">
        @foreach ($baju_l as $item)
            <div class="w-[329px]  h-auto border flex flex-col">
                <img src="{{ asset('foto/' . $item->foto) }}" alt="" class="w-full h-[370px] object-cover" />
                <div class="flex justify-between p-5 items-center">
                    <div>
                        <h1 class="font-bold text-[20px]">
                            {{ $item->nama }}
                        </h1>
                        <h2 class="text-[16px]">
                            {{ $item->harga }}
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
@endsection
