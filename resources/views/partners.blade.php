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
            @include('layouts.header')
            <section
                class="relative bg-home-hero bg-cover bg-center bg-no-repeat md:h-[36rem]"
            >
                <div
                    class="absolute inset-0"
                ></div>
                    <div
                        class="relative mx-auto lg:mx-12 lg:max-w-screen-xl px-4 pb-44 sm:px-6 lg:flex lg:h-[36rem] md:items-center"
                    >
                    <div class="text-white text-center md:text-left">
                        <h1 class="pt-24 text-xl font-bold sm:text-5xl lg:mt-0">
                            Are you a Trade Financing, Trade Insurance, Transport & Logistics, Warehousing, Collateral Management, Clearing & Forwarding company looking to work with African businesses?
                        </h1>
                    </div>
                </div>
            </section>
            <div class="lg:absolute lg:top-[32rem] grid md:grid-cols-2 mt-2 lg:mt-0 lg:flex justify-between gap-4 px-4 lg:px-22 4xl:px-48">
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
                    <span class="font-semibold">We provide insights to tarrifs, taxes duties for different African countries</span>
                    <a href="{{ config('app.marketplace_url') }}/partner/warehouse/signup" class="border-2 border-primary-one w-3/4 mx-auto py-4 px-4 text-center font-bold text-primary-one rounded-lg my-3 hover:bg-primary-one hover:text-white">Sign Up</a>
                </div>
                <div class="bg-white rounded-lg flex flex-col text-center p-4 md:max-w-xs border border-gray-300">
                    <i class="fas fa-briefcase bg-[#ecb7b6bf] text-[#6E1210] p-4 rounded-lg w-fit mx-auto"></i>
                    <h3 class="text-xl font-bold">Inspection Partner</h3>
                    <span class="font-semibold">We provide insights to tarrifs, taxes duties for different African countries</span>
                    <a href="{{ config('app.marketplace_url') }}/partner/inspector/signup" class="border-2 border-primary-one w-3/4 mx-auto py-4 px-4 text-center font-bold text-primary-one rounded-lg my-3 hover:bg-primary-one hover:text-white">Sign Up</a>
                </div>
            </div>

            <div class="mt-2 px-4 lg:mt-32 lg:px-24 grid md:grid-cols-2 md:gap-2 lg:gap-0 border-b pb-2 border-slate-400">
                <div class="">
                    <img src="{{ asset('assets/img/finance.jpg') }}" alt="" class="w-[38rem] h-[24rem] lg:h-[46rem] object-cover rounded-lg">
                </div>
                <div class="my-auto max-w-md">
                    <h2 class="text-3xl font-bold mt-2 md:mt-12 mb-6">Trade Financing</h2>
                    <p class="font-semibold text-xl">Real Sources Africa gives you access to verified existing businesses with ongoing transactions whose documentation is accessible on the dashboard. From their peer ratings on Real Sources Africa, you can credibly authenticate their trade flows, integrity and credit history.</p>
                    {{-- <button class="bg-primary-one text-white px-6 py-4 rounded-lg text-center md:mt-16 font-bold">Read More</button> --}}
                </div>
            </div>

            <div class="mt-2 px-4 lg:mt-24 lg:px-24 flex flex-col-reverse md:grid md:grid-cols-2 md:gap-2 lg:gap-0 border-b pb-2 border-slate-400">
                <div class="my-auto max-w-md">
                    <h2 class="text-3xl font-bold mt-2 md:mt-12 mb-6">Insurance Partner</h2>
                    <p class="font-semibold text-xl">Access high-volume traders seeking to ensure that their goods reach customers globally safe;y and on time. There is guaranteed transparency of transactions and high trade flows.</p>
                    {{-- <button class="bg-primary-one text-white px-10 py-4 rounded-lg text-center md:mt-16 font-bold">Read More</button> --}}
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
                    <h2 class="text-3xl font-bold mt-2 md:mt-12 mb-6">Transport & Logistics</h2>
                    <p class="font-semibold text-xl">Our vendors depend on you to move goods around the 54 African countries worth billions in value globally.</p>
                    {{-- <button class="bg-primary-one text-white px-6 py-4 rounded-lg text-center md:mt-16 font-bold">Read More</button> --}}
                </div>
            </div>

            <div class="mt-2 px-4 lg:mt-24 lg:px-24 flex flex-col-reverse md:grid md:grid-cols-2 md:gap-2 lg:gap-0 border-b pb-2 border-slate-400">
                <div class="my-auto max-w-md">
                    <h2 class="text-3xl font-bold mt-12 mb-6">Clearing and Forwarding Agencies</h2>
                    <p class="font-semibold text-xl">There are millions of customers counting on you to facilitate smooth shipment and clearance of cargo. This is an opportunity to support African businesses through timely documentation, proper documentation and paperwork and subsidiary activities like specialized labor and transport.</p>
                    {{-- <button class="bg-primary-one text-white px-6 py-4 rounded-lg text-center md:mt-16 font-bold">Read More</button> --}}
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
                    <h2 class="text-3xl font-bold mt-2 md:mt-12 mb-6">Warehousing</h2>
                    <p class="font-semibold text-xl">RSA supports your operations in various markets across Africa by providing you with short-term and secure warehouse facilities at affordable costs. Whether you are dealing in perishable, fragile, or bulky goods we have specifically designed something for your business.</p>
                    {{-- <button class="bg-primary-one text-white px-6 py-4 rounded-lg text-center md:mt-16 font-semibold">Read More</button> --}}
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
