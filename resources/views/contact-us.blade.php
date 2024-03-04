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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-outfit">
        <div class="bg-white">
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
                class="relative bg-home-hero bg-cover bg-center bg-no-repeat"
            >
                <div
                    class="absolute inset-0"
                ></div>
                    <div
                        class="relative lg:px-24 4xl:px-48 px-4 pb-32 sm:px-6 lg:flex lg:h-[420px] lg:items-center"
                    >
                    <div class="max-w-4xl text-white text-center md:text-left">
                        <h1 class="text-3xl font-bold sm:text-5xl">
                            A technology approach to logistics, warehousing & distribution
                        </h1>

                        <p class="mt-4 max-w-lg sm:text-xl/relaxed font-semibold">
                            Reach out. Let's Talk
                        </p>

                        <div class="mt-8 flex flex-wrap justify-center md:justify-start gap-4 text-center">
                            <button class="px-8 py-4 bg-white text-black font-semibold rounded-md">Schedule A Call</button>
                        </div>
                    </div>
                </div>
            </section>
            <div class="px-2 lg:px-24">
                <form action="coming-soon.php" method="post">
                    <div class="px-2 md:px-44 grid grid-cols-3 gap-3 my-4">
                        <div class="flex flex-col">
                            <label class="text-[#6F1310] text-md font-bold">Full Name</label>
                            <input name="fullname" class="border-2 border-gray-300 dark:border-gray-300 dark:text-dark bg-slate-200 focus:border-gray-400 dark:focus:border-gray-400 focus:ring-gray-400 dark:focus:ring-gray-400 rounded-md shadow-sm h-10" />
                        </div>
                        <div class="flex flex-col">
                            <label class="text-[#6F1310] text-md font-bold">Organization</label>
                            <input name="organization" class="border-2 border-gray-300 dark:border-gray-300 dark:text-dark bg-slate-200 focus:border-gray-400 dark:focus:border-gray-400 focus:ring-gray-400 dark:focus:ring-gray-400 rounded-md shadow-sm h-10" />
                        </div>
                        <div class="flex flex-col">
                            <label class="text-[#6F1310] text-md font-bold">Email Address</label>
                            <input name="email" class="border-2 border-gray-300 dark:border-gray-300 dark:text-dark bg-slate-200 focus:border-gray-400 dark:focus:border-gray-400 focus:ring-gray-400 dark:focus:ring-gray-400 rounded-md shadow-sm h-10" />
                        </div>
                        <div class="col-span-3">
                            <label class="text-[#6F1310] text-md font-bold">Message</label>
                            <textarea name="message" id="" class="w-full bg-gray-200 border-0 rounded-md" rows="5"></textarea>
                        </div>
                        <div class="col-span-3">
                            <button type="submit" class="bg-primary-one mb-8 rounded-lg text-white px-4 py-1 font-bold tracking-wider">Submit</button>
                        </div>
                    </div>
                </form>
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
    </body>
</html>
