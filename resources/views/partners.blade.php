@props(['view' => 'vendor'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Real Sources Africa') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Titillium+Web:wght@400;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-outfit antialiased">
        <div class="bg-white">
            {{-- Navbar --}}
            <div class="sticky top-0 bg-white flex lg:flex-wrap lg:items-center justify-between mx-auto py-1 lg:px-24 md:px-2 z-40 duration-200" id="main-header">
                <div class="flex gap-2">
                    <button data-drawer-target="home-sidebar" data-drawer-toggle="home-sidebar" aria-controls="home-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>

                    <a href="{{ url('/') }}" class="">
                        <x-application-logo class="w-[10rem] object-contain" />
                    </a>
                </div>

                <div id="home-sidebar" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800" tabindex="-1" aria-labelledby="home-sidebar-label">
                    <a href="{{ url('/') }}" class="">
                        <x-application-logo class="w-[10rem] object-contain" />
                    </a>
                    <button type="button" data-drawer-hide="home-sidebar" aria-controls="home-sidebar" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                    <ul class="space-y-4 text-center mt-2">
                        <li class="font-bold @if(request()->routeIs('welcome')) active @endif">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.about')) active @endif">
                            <a href="{{ route('partners.about') }}">
                                About Us
                            </a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.marketplace')) active @endif">
                            <a href="{{ route('welcome') }}">Marketplace</a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.index')) active @endif">
                            <a href="{{ route('partners.index') }}">Partners</a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.vendors')) active @endif">
                            <a href="{{ route('partners.vendors') }}">
                                Vendors
                            </a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.orders')) active @endif">
                            <a href="{{ config('app.marketplace_url') }}/buyer/orders">
                                Orders
                            </a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.contact')) active @endif">
                            <a href="{{ route('partners.contact') }}">
                                Contact us
                            </a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.dashboard')) active @endif">
                            <a href="{{ config('app.marketplace_url') }}/vendor/dashboard">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ config('app.marketplace_url') }}/login" class="">
                                <x-primary-button class="py-2">Sign In</x-primary-button>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="hidden lg:block my-auto partners">
                    <ul class="flex gap-16">
                        <li class="font-bold @if(request()->routeIs('welcome')) active @endif">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.about')) active @endif">
                            <a href="{{ route('partners.about') }}">
                                About Us
                            </a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.marketplace')) active @endif">
                            <a href="{{ config('app.marketplace_url') }}">Marketplace</a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.index')) active @endif">
                            <a href="{{ route('partners.index') }}">Partners</a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.vendors')) active @endif">
                            <a href="{{ route('partners.vendors') }}">
                                Vendors
                            </a>
                        </li>
                        <li class="font-bold">
                            <a href="{{ config('app.marketplace_url') }}/buyer/orders">
                                Orders
                            </a>
                        </li>
                        <li class="font-bold">
                            <a href="{{ config('app.marketplace_url') }}/dashboard">
                                Dashboard
                            </a>
                        </li>
                        <li class="font-bold @if(request()->routeIs('partners.contact')) active @endif">
                            <a href="{{ route('partners.contact') }}">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ config('app.marketplace_url') }}/cart" class="my-auto">
                        <i class="fas fa-shopping-cart text-primary-one"></i>
                    </a>
                    @guest
                        <a href="{{ config('app.marketplace_url') }}/login" class="hidden my-auto md:block">
                            <x-primary-button class="py-2">Sign In</x-primary-button>
                        </a>
                    @endguest
                </div>
            </div>
            <section
                class="relative bg-home-hero bg-cover bg-center bg-no-repeat h-[36rem]"
            >
                <div
                    class="absolute inset-0"
                ></div>
                    <div
                        class="relative mx-auto max-w-screen-xl px-4 pb-44 sm:px-6 lg:flex lg:h-[36rem] lg:items-center lg:px-8"
                    >
                    <div class="max-w-xl text-white text-center md:text-left">
                        <h1 class="text-3xl font-extrabold sm:text-5xl lg:mt-0">
                            30B+ Annual Sale Value
                        </h1>

                        <p class="mt-4 max-w-lg sm:text-xl/relaxed font-semibold">
                            Real Sources has helped distributors move goods worth over 30 Billion in the last one year
                        </p>
                    </div>
                </div>
            </section>
            <div class="lg:absolute lg:top-[32rem] 4xl:top-[52rem] grid md:grid-cols-2 mt-2 lg:mt-0 lg:flex justify-between gap-4 px-4 lg:px-22 4xl:px-48">
                <div class="bg-white rounded-lg flex flex-col text-center p-4 md:max-w-xs border border-gray-300">
                    <i class="fas fa-book bg-[#ecb7b6bf] text-[#6E1210] p-4 rounded-lg w-fit mx-auto"></i>
                    <h3 class="text-xl font-bold">Logistics & Shipping</h3>
                    <span class="font-semibold">We offer best practices for effcient transportation of bulky goods</span>
                    <a href="{{ config('app.marketplace_url') }}/partner/logistics/signup" class="border-2 border-primary-one w-3/4 mx-auto py-4 px-4 text-center font-bold text-primary-one rounded-lg my-3 hover:bg-primary-one hover:text-white">Sign Up</a>
                </div>
                <div class="bg-white rounded-lg flex flex-col text-center p-4 md:max-w-xs border border-gray-300">
                    <i class="fas fa-credit-card bg-[#ecb7b6bf] text-[#6E1210] p-4 rounded-lg w-fit mx-auto"></i>
                    <h3 class="text-xl font-bold">Financing Partner</h3>
                    <span class="font-semibold">We provide secure financial instruments for transactions</span>
                    <a href="{{ config('app.marketplace_url') }}/partner/financier/signup" class="border-2 border-primary-one w-3/4 mx-auto py-4 px-4 text-center font-bold text-primary-one rounded-lg my-3 hover:bg-primary-one hover:text-white">Sign Up</a>
                </div>
                <div class="bg-white rounded-lg flex flex-col text-center p-4 md:max-w-xs border border-gray-300">
                    <i class="fas fa-cubes bg-[#ecb7b6bf] text-[#6E1210] p-4 rounded-lg w-fit mx-auto"></i>
                    <h3 class="text-xl font-bold">Insurance Partner</h3>
                    <span class="font-semibold">Connect with businesses, potential partners & suppliers in Africa</span>
                    <a href="{{ config('app.marketplace_url') }}/partner/insurance/signup" class="border-2 border-primary-one w-3/4 mx-auto py-4 px-4 text-center font-bold text-primary-one rounded-lg my-3 hover:bg-primary-one hover:text-white">Sign Up</a>
                </div>
                <div class="bg-white rounded-lg flex flex-col text-center p-4 md:max-w-xs border border-gray-300">
                    <i class="fas fa-briefcase bg-[#ecb7b6bf] text-[#6E1210] p-4 rounded-lg w-fit mx-auto"></i>
                    <h3 class="text-xl font-bold">Warehouse Partner</h3>
                    <span class="font-semibold">We provide insights to tarrids, taxes duties for different African countries</span>
                    <a href="{{ config('app.marketplace_url') }}/partner/warehouse/signup" class="border-2 border-primary-one w-3/4 mx-auto py-4 px-4 text-center font-bold text-primary-one rounded-lg my-3 hover:bg-primary-one hover:text-white">Sign Up</a>
                </div>
                <div class="bg-white rounded-lg flex flex-col text-center p-4 md:max-w-xs border border-gray-300">
                    <i class="fas fa-briefcase bg-[#ecb7b6bf] text-[#6E1210] p-4 rounded-lg w-fit mx-auto"></i>
                    <h3 class="text-xl font-bold">Inspection Partner</h3>
                    <span class="font-semibold">We provide insights to tarrids, taxes duties for different African countries</span>
                    <a href="{{ config('app.marketplace_url') }}/partner/inspector/signup" class="border-2 border-primary-one w-3/4 mx-auto py-4 px-4 text-center font-bold text-primary-one rounded-lg my-3 hover:bg-primary-one hover:text-white">Sign Up</a>
                </div>
            </div>

            <div class="mt-2 px-4 lg:mt-32 lg:px-24 grid md:grid-cols-2 md:gap-2 lg:gap-0 border-b pb-2 border-slate-400">
                <div class="">
                    <img src="{{ asset('assets/img/finance.jpg') }}" alt="" class="w-[38rem] h-[24rem] lg:h-[46rem] object-cover rounded-lg">
                </div>
                <div class="my-auto max-w-md">
                    <h2 class="text-2xl font-bold mt-2 md:mt-12 mb-6">Trade Financing</h2>
                    <p class="font-semibold">Real Sources Africa now gives SMEs an opportunity to compete in an international market by gaining visbility on the platform. The marketplace offers ease and convenience of trading accross a wide variety and accessibility of goods and products at a competitive rate.</p>
                    <button class="bg-primary-one text-white px-6 py-4 rounded-lg text-center md:mt-16 font-bold">Read More</button>
                </div>
            </div>

            <div class="mt-2 px-4 lg:mt-24 lg:px-24 flex flex-col-reverse md:grid md:grid-cols-2 md:gap-2 lg:gap-0 border-b pb-2 border-slate-400">
                <div class="my-auto max-w-md">
                    <h2 class="text-2xl font-bold mt-2 md:mt-12 mb-6">Insurance Partner</h2>
                    <p class="font-semibold">Real Sources Africa now gives SMEs an opportunity to compete in an international market by gaining visbility on the platform. The marketplace offers ease and convenience of trading accross a wide variety and accessibility of goods and products at a competitive rate.</p>
                    <button class="bg-primary-one text-white px-10 py-4 rounded-lg text-center md:mt-16 font-bold">Read More</button>
                </div>
                <div class="">
                    <img src="{{ asset('assets/img/insurance.jpg') }}" alt="" class="w-[38rem] h-[24rem] lg:h-[46rem] object-cover rounded-lg">
                </div>
            </div>

            <div class="mt-2 px-4 lg:mt-24 lg:px-24 grid md:grid-cols-2 md:gap-2 lg:gap-0 border-b pb-2 border-slate-400">
                <div class="">
                    <img src="{{ asset('assets/img/logistics3.jpg') }}" alt="" class="w-[38rem] h-[24rem] lg:h-[46rem] object-cover rounded-lg">
                </div>
                <div class="my-auto max-w-md">
                    <h2 class="text-2xl font-bold mt-2 md:mt-12 mb-6">Logistics & Shipping Partner</h2>
                    <p class="font-semibold">Real Sources Africa now gives SMEs an opportunity to compete in an international market by gaining visbility on the platform. The marketplace offers ease and convenience of trading accross a wide variety and accessibility of goods and products at a competitive rate.</p>
                    <button class="bg-primary-one text-white px-6 py-4 rounded-lg text-center md:mt-16 font-bold">Read More</button>
                </div>
            </div>

            <div class="mt-2 px-4 lg:mt-24 lg:px-24 flex flex-col-reverse md:grid md:grid-cols-2 md:gap-2 lg:gap-0 border-b pb-2 border-slate-400">
                <div class="my-auto max-w-md">
                    <h2 class="text-2xl font-bold mt-12 mb-6">Collateral Management Partner</h2>
                    <p class="font-semibold">Real Sources Africa now gives SMEs an opportunity to compete in an international market by gaining visbility on the platform. The marketplace offers ease and convenience of trading accross a wide variety and accessibility of goods and products at a competitive rate.</p>
                    <button class="bg-primary-one text-white px-6 py-4 rounded-lg text-center md:mt-16 font-bold">Read More</button>
                </div>
                <div class="">
                    <img src="{{ asset('assets/img/collateral.jpg') }}" alt="" class="w-[38rem] h-[24rem] lg:h-[46rem] object-cover rounded-lg">
                </div>
            </div>

            <div class="mt-2 px-4 lg:mt-24 lg:px-24 grid md:grid-cols-2 md:gap-2 lg:gap-0 pb-2">
                <div class="">
                    <img src="{{ asset('assets/img/warehousing.jpg') }}" alt="" class="w-[38rem] h-[24rem] lg:h-[46rem] object-cover rounded-lg">
                </div>
                <div class="my-auto max-w-md">
                    <h2 class="text-2xl font-bold mt-2 md:mt-12 mb-6">Warehousing</h2>
                    <p class="font-semibold">Real Sources Africa now gives SMEs an opportunity to compete in an international market by gaining visbility on the platform. The marketplace offers ease and convenience of trading accross a wide variety and accessibility of goods and products at a competitive rate.</p>
                    <button class="bg-primary-one text-white px-6 py-4 rounded-lg text-center md:mt-16 font-semibold">Read More</button>
                </div>
            </div>

            <div class="bg-slate-950 px-2 lg:px-24 mt-4 pb-12">
                <img src="{{ asset('assets/img/logo-alt.png') }}" class="w-[10rem] h-[10rem] object-contain" alt="">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-2 lg:gap-0 text-white">
                    <p class="md:max-w-xs text-center md:text-left font-thin">Real Sources is an online marketplace tailored with African businesses in mind that is redefining business to business trade in Africa</p>
                    <div class="text-center md:text-left">
                        <ul>
                            <li><p class="font-bold">Company</p></li>
                            <li><p class="font-thin">About</p></li>
                            <li><p class="font-thin">Support</p></li>
                        </ul>
                    </div>
                    <div class="text-center md:text-left">
                        <ul>
                            <li><p class="font-bold">Products</p></li>
                            <li><p class="font-thin">Marketplace</p></li>
                            <li><p class="font-thin">Logistics</p></li>
                        </ul>
                    </div>
                    <div class="text-center md:text-left">
                        <ul>
                            <li><p class="font-bold">Quick Links</p></li>
                            <li><p class="font-thin">Home</p></li>
                            <li><p class="font-thin">Partners</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    </body>
</html>
