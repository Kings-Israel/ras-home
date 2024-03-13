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
            @include('layouts.header2')

            <section
                class="relative bg-home-hero bg-cover bg-center bg-no-repeat"
            >
                <div
                    class="absolute inset-0"
                ></div>
                    <div
                        class="relative pb-32 sm:px-6 lg:h-[820px] lg:items-center lg:pt-24"
                    >
                    <div class="text-white text-center">
                        <h1 class="text-3xl font-bold sm:text-5xl">
                            Are you looking to trade <span class="text-primary-two">seamlessly</span> in <span class="text-primary-two">Africa?</span>
                        </h1>

                        {{-- <p class="mt-4 max-w-lg sm:text-xl/relaxed font-semibold">
                            Real Sources has helped distributors move goods worth over 30 Billion in the last one year.
                        </p> --}}

                        <div class="mt-8 flex flex-wrap justify-center gap-4 text-center">
                            <button class="px-8 py-4 bg-white text-black font-semibold rounded-md">Learn More</button>
                        </div>
                    </div>
                </div>
            </section>
            <div class="px-4 lg:px-24 mt-[10rem]">
                <h1 class="text-3xl text-center my-3 font-semibold text-primary-two">Some of Our Partners</h1>
                <div class="flex flex-nowrap gap-4 overflow-x-auto mt-4 no-scrollbar">
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="{{ asset('assets/img/Logo.png') }}" class="h-20 w-52 object-contain" alt="">
                    </div>
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="{{ asset('assets/img/Logo.png') }}" class="h-20 w-52 object-contain" alt="">
                    </div>
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="{{ asset('assets/img/Logo.png') }}" class="h-20 w-52 object-contain" alt="">
                    </div>
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="{{ asset('assets/img/Logo.png') }}" class="h-20 w-52 object-contain" alt="">
                    </div>
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="{{ asset('assets/img/Logo.png') }}" class="h-20 w-52 object-contain" alt="">
                    </div>
                </div>
            </div>

            <div class="mt-4 md:mt-24 px-4 lg:px-24 md:grid md:grid-cols-2 md:gap-2">
                <div class="">
                    <img src="{{ asset('assets/img/marketplace.png') }}" alt="" class="w-[38rem]">
                </div>
                <div class="lg:my-auto md:max-w-md flex flex-col justify-center md:block">
                    <h2 class="text-2xl font-bold text-center md:text-left">The Marketplace</h2>
                    <p class="font-semibold text-center md:text-left md:mb-8">Real Sources Africa now gives SMEs an opportunity to compete in an international market by gaining visbility on the platform. The marketplace offers ease and convenience of trading accross a wide variety and accessibility of goods and products at a competitive rate.</p>
                    <a href="{{ config('app.marketplace_url') }}" class="bg-primary-one text-white px-6 py-4 rounded-lg text-center mt-2 lg:mt-24 font-semibold">Visit our Marketplace</a>
                </div>
            </div>

            <div class="bg-[#eae1e1bf] h-[52rem]">
                <h1 class="text-3xl text-center my-5 pt-6 font-semibold">What we Offer</h1>
                <div class="flex flex-nowrap gap-4 overflow-x-auto px-2 md:px-24 no-scrollbar">
                    <div class="flex-shrink-0 my-4 relative">
                        <img src="{{ asset('assets/img/financing.jpg') }}" class="h-96 w-[18rem] 4xl:w-[20rem] object-cover my-4 rounded-lg" alt="">
                        <div class="text-center text-white absolute bottom-8 left-8">
                            <h5 class="text-xl font-bold">Financing</h5>
                            <p class="mb-6 text-sm whitespace-normal font-semibold">Invoice Financing and Discounting</p>
                            <button class="mx-auto text-amber-950 bg-white rounded-lg px-5 py-4 font-bold">View more</button>
                        </div>
                    </div>
                    <div class="flex-shrink-0 my-4 relative">
                        <img src="{{ asset('assets/img/marketplace.png') }}" class="w-[18rem] 4xl:w-[20rem] h-96 object-cover my-4 rounded-lg" alt="">
                        <div class="text-center text-white absolute bottom-8 left-8 4xl:left-10">
                            <h5 class="text-xl font-bold">Inusrance</h5>
                            <p class="mb-6 text-sm whitespace-normal font-semibold">Business and Hustler Opportunities</p>
                            <button class="mx-auto text-amber-950 bg-white rounded-lg px-5 py-4 font-bold">View more</button>
                        </div>
                    </div>
                    <div class="flex-shrink-0 my-4 relative">
                        <img src="{{ asset('assets/img/inspection.jpg') }}" class="w-[18rem] 4xl:w-[20rem] h-96 object-cover my-4 rounded-lg" alt="">
                        <div class="text-center text-white absolute bottom-8 left-8 4xl:left-10">
                            <h5 class="text-xl font-bold">Inspection</h5>
                            <p class="mb-6 text-sm whitespace-normal font-semibold">Built Environment and Urban Planning Center</p>
                            <button class="mx-auto text-amber-950 bg-white rounded-lg px-5 py-4 font-bold">View more</button>
                        </div>
                    </div>
                    <div class="flex-shrink-0 my-4 relative">
                        <img src="{{ asset('assets/img/logistics3.jpg') }}" class="w-[18rem] 4xl:w-[20rem] h-96 object-cover my-4 rounded-lg" alt="">
                        <div class="text-center text-white absolute bottom-8 left-8 4xl:left-10">
                            <h5 class="text-xl font-bold">Logistics</h5>
                            <p class="mb-6 text-sm whitespace-normal font-semibold">Finance and Economic Planning Affairs</p>
                            <button class="mx-auto text-amber-950 bg-white rounded-lg px-5 py-4 font-bold">View more</button>
                        </div>
                    </div>
                    <div class="flex-shrink-0 my-4 relative">
                        <img src="{{ asset('assets/img/warehousing.jpg') }}" class="w-[18rem] 4xl:w-[20rem] h-96 object-cover my-4 rounded-lg" alt="">
                        <div class="text-center text-white absolute bottom-8 left-8 4xl:left-10">
                            <h5 class="text-xl font-bold">Warehousing</h5>
                            <p class="mb-6 text-sm whitespace-normal font-semibold">Finance and Economic Planning Affairs</p>
                            <button class="mx-auto text-amber-950 bg-white rounded-lg px-5 py-4 font-bold">View more</button>
                        </div>
                    </div>
                </div>

                <h1 class="text-3xl text-center my-3 py-2 font-semibold">Learn More About Us</h1>
                <p class="text-center font-bold text-sm pb-4 px-2 md:px-0">Get a bit more insight on how to export & import in Real Sources</p>
                <div class="flex justify-center">
                    <video class="h-96 rounded-lg" controls>
                        <source src="">
                    </video>
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
