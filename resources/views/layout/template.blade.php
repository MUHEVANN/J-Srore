<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>

<body>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a class="font-bold">Men</a></li>
                    <li><a class="font-bold">Women</a></li>
                    <li><a>Sport</a></li>
                    <li><a>Casual</a></li>


                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl" href="{{ url('home') }}">J Store</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a class="font-bold" href="{{ url('man') }}">MEN</a></li>
                <li><a class="font-bold" href="{{ url('women') }}">WOMEN</a></li>
                <li><a>All</a></li>
                <li><a>Casual</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <div
                class="relative sm:flex sm:justify-center sm:items-center  bg-dots-darker bg-center  dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                @if (Route::has('login'))
                    <div class="relative">
                        @auth
                            <div class="flex items-center">

                                <div class="dropdown dropdown-end">
                                    <label tabindex="0" class="btn btn-ghost rounded-btn">{{ Auth::user()->name }} <svg
                                            class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" /></label>
                                    <ul tabindex="0"
                                        class="menu dropdown-content p-2 shadow bg-base-100 rounded-box w-52 mt-4">
                                        @if (Auth::user()->hasRole('admin'))
                                            <li><a href="{{ url('home') }}">dasboard</a></li>
                                        @endif
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                </a>
                            </div>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

        </div>
    </div>
    @if (session('success'))
        <div class="alert shadow-lg" role="alert">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="stroke-info flex-shrink-0 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif
    @yield('konten')
    <div class="w-full h-auto">
        {{-- email --}}
        <form class="w-full h-[123px] bg-[#1A1414] flex justify-center items-center gap-x-5">
            <label class="text-white font-bold text-[36px]">SEND YOUR MESSAGE TO US</label>
            <input type="text" class="px-2 py-2 outline-none w-[357px]" placeholder="Your Email Address">
            <span class="text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </span>
        </form>
        {{-- /email --}}
        {{-- footer --}}
        <div class="w-full h-[250px] bg-[#D9D9D9] flex items-center justify-center">
            <div class="flex gap-x-5 text-[20px]">


                <div>
                    <div>
                        <h1 class="font-bold text-[24px]">Product</h1>
                        <p>Shoes</p>
                        <p>Jacket</p>
                    </div>
                    <div>
                        <h1 class="font-bold text-[24px]">Featured</h1>
                        <p>New Arrivals</p>
                        <p>Sale</p>
                        <p>Exlusive</p>
                    </div>
                </div>
                <div>
                    <h1 class="font-bold text-[24px]">Collection</h1>
                    <p>Adidas</p>
                    <p>Nike</p>
                    <p>Vans</p>
                    <p>Aero</p>
                    <p>Ventela</p>
                </div>
                <div>
                    <h1 class="font-bold text-[24px]">Legal</h1>
                    <p>Privacy Police</p>
                    <p>Term And Conditinal</p>
                    <p>Delivery Term</p>
                </div>
                <div>
                    <h1 class="font-bold text-[24px]">Support</h1>
                    <p>Contact Us</p>
                    <p>Payment</p>
                    <p>Return And Refund</p>
                    <p>Ordering Size Cart</p>
                </div>
            </div>
        </div>
        {{-- /footer --}}
        {{-- bendera --}}
        <div class="w-full h-[50px] flex justify-around items-center bg-[#1A1414] text-white font-bold">
            <h1>Indonesia</h1>
            <h1>Police Privacy | Term and Condition 2023</h1>
        </div>
        {{-- /bendera --}}
    </div>
</body>

</html>
