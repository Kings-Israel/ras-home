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
                        class="relative mx-auto lg:mx-12 lg:max-w-screen-xl px-4 pb-44 sm:px-6 lg:flex lg:h-[36rem] lg:items-center"
                    >
                    <div class="text-white text-center md:text-left">
                        <h1 class="pt-24 text-xl font-bold sm:text-5xl lg:mt-0">
                            Real Sources Africa facilitates effortless trading among African businesses by providing logistical, financial, marketing and legal support all in one platform
                        </h1>
                    </div>
                </div>
            </section>

            <div class="px-2 lg:px-24">
                <div class="">
                    <div>
                        <p class="mt-4 sm:text-2xl/relaxed font-bold underline text-primary-two">
                            Our Pillars
                        </p>
                        <p class="sm:text-xl/relaxed font-bold">
                            RSA is driven by three strategic pillars:
                        </p>
                        <ul class="font-semibold text-lg block md:grid md:grid-cols-3 gap-4">
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-xl/relaxed font-semibold text-primary-one text-center">
                                    Unlocking AfCFTA and global markets for African Businesses
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-xl/relaxed font-semibold text-primary-one text-center">
                                    Strong partnerships
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-xl/relaxed font-semibold text-primary-one text-center">
                                    Continental trading in strategic and authentic African products
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="border-b-2 border-slate-300 pb-2">
                        <p class="mt-4 sm:text-2xl/relaxed font-bold underline text-primary-two">
                            Learn More...
                        </p>
                        <p class="mt-4 sm:text-xl/relaxed font-semibold">
                            We understand that we cannot connect African SMEs to global markets and help them realize their full potential as the next frontier in global trade without addressing challenges that hinder access, rapid transactions, and growth such as red tape, lack of trust, logistical challenges, finances, last mile distribution, and market intelligence.
                        </p>
                        <p class="mt-4 sm:text-xl/relaxed font-semibold">
                            Our work at RSA is to remove these barriers by assembling all the resources your business needs under one platform to seamlessly connect you with buyers across AfCFTA and global markets.
                        </p>
                        <p class="mt-4 sm:text-xl/relaxed font-semibold">
                            As you focus on producing authentic African products, RSA will do the rest to ensure you fetch the right prices in a ready market. We bring you the market, tools, logistical support, resources and partners right to your screen with a click of a button.
                        </p>
                    </div>
                    <div>
                        <p class="mt-4 sm:text-2xl/relaxed font-bold underline text-primary-two">
                            Why Real Sources Africa?
                        </p>
                        <ul class="font-semibold text-lg block md:grid md:grid-cols-2 gap-4">
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-2xl/relaxed font-bold text-primary-one">
                                    ✔	Get connected
                                </p>
                                <p class="sm:text-xl/relaxed font-semibold">
                                    RSA avails a global market that understands and values the authenticity and quality of African products while protecting you from exploitative prices and unscrupulous brokers.
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-2xl/relaxed font-bold text-primary-one">
                                    ✔	Logistical optimization and support
                                </p>
                                <p class="sm:text-xl/relaxed font-semibold">
                                    We take care of red tape across African borders to ensure timely delivery, security and preservation of the quality of your products at the lowest cost possible. RSA provides technologically-supported logistics to allow real-time tracking of transactions.
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-2xl/relaxed font-bold text-primary-one">
                                    ✔	Build and showcase your brand
                                </p>
                                <p class="sm:text-xl/relaxed font-semibold">
                                    Being a verified seller on RSA is in itself a mark of trust and quality. We help you meet and get recognized by millions of trusted customers every day for free. Every successful transaction increases your rating drawing reputable partners and buyers to you.
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-2xl/relaxed font-bold text-primary-one">
                                    ✔	Verified and trusted Suppliers
                                </p>
                                <p class="sm:text-xl/relaxed font-semibold">
                                    We do background checks on all vendors onboarding RSA to ensure they are duly registered and satisfy legal requirements and product standards.
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-2xl/relaxed font-bold text-primary-one">
                                    ✔	Grow your business
                                </p>
                                <p class="sm:text-xl/relaxed font-semibold">
                                    Build successful relationships with players in your industry and stay up-to-date with relevant market data to give your business a competitive edge.
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-2xl/relaxed font-bold text-primary-one">
                                    ✔	Market Intelligence
                                </p>
                                <p class="sm:text-xl/relaxed font-semibold">
                                    You can move with confidence in the marketplace as we provide you with valuable market insights, trading tips, market trends, tariffs and taxes, climate impacts, and (industry) expertise per industry.
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-2xl/relaxed font-bold text-primary-one">
                                    ✔	Freedom to do business
                                </p>
                                <p class="sm:text-xl/relaxed font-semibold">
                                    RSA lets you decide and bargain your pricing, minimum order quantity, and shipping terms.
                                </p>
                            </li>
                            <li class="border rounded-lg border-slate-400 p-2">
                                <p class="sm:text-2xl/relaxed font-bold text-primary-one">
                                    ✔	Authentic African quality
                                </p>
                                <p class="sm:text-xl/relaxed font-semibold">
                                    Our product range is well- thought out as we focused on the uniqueness of African supplies
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="hidden">
                <div class="mt-2 px-4 lg:mt-24 lg:px-24 grid md:grid-cols-2 md:gap-2 lg:gap-0 border-b pb-2 border-slate-400">
                    <div class="">
                        <img src="{{ asset('assets/img/finance.jpg') }}" alt="" class="w-[38rem] h-[24rem] lg:h-[46rem] object-cover rounded-lg">
                    </div>
                    <div class="my-auto max-w-md">
                        <h2 class="text-2xl font-bold mt-2 md:mt-8 mb-6">Trade Financing</h2>
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
