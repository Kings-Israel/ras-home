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
            @include('layouts.header')
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
                <div class="md:px-44">
                    <p class="mt-4 max-w-lg sm:text-xl/relaxed font-semibold col-span-full">
                        Send us an email, We'll get back to you
                    </p>
                    <form action="coming-soon.php" method="post">
                        <div class="px-2 grid grid-cols-3 gap-3 my-4">
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
