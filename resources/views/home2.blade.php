<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token">

        <title>Real Sources Africa</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Titillium+Web:wght@400;900&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            outfit: ['Outfit'],
                        },
                        screens: {
                            '4xl': '1900px'
                        },
                        colors: {
                            'primary-one': '#EE5D32',
                            'primary-two': '#6F1310',
                        },
                    },
                },
            }
        </script>
    </head>
    <body class="antialiased font-outfit">
        <div class="bg-white">
            <div class="sticky top-0 bg-white flex flex-wrap lg:flex-nowrap lg:items-center justify-between mx-auto py-1 lg:px-24 md:px-2 z-40 duration-200" id="main-header">
                <div class="flex gap-10">
                    <a href="https://realsources.africa" class="">
                        <img src="Logo.png" class="w-[10rem] object-contain" alt="">
                    </a>
                    <div class="hidden md:block my-auto partners">
                        <ul class="flex flex-wrap lg:flex-nowrap whitespace-nowrap gap-6 lg:gap-10 text-primary-two">
                            <li class="font-bold">
                                <a href="https://dev.realsources.africa/about">
                                    About Us
                                </a>
                            </li>
                            <li class="font-bold">
                                <a href="https://dev.realsources.africa/partners">Partner With Us</a>
                            </li>
                            <li class="font-bold">
                                <a href="https://dev.realsources.africa/vendors">
                                    Sell
                                </a>
                            </li>
                            <li class="font-bold">
                                <a href="https://market.realsources.africa">
                                    Buy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <a href="https://dev.realsources.africa/contact" class="font-bold my-auto text-primary-two hidden md:block">
                        Contact us
                    </a>
                    <a href="https://market.realsources.africa/login" class="my-auto">
                        <button class="py-2 h-fit whitespace-nowrap bg-primary-one px-2 text-white rounded-lg">Visit Shop</button>
                    </a>
                </div>
            </div>

            <section class="">
                <img class="absolute object-cover h-[320px] md:h-[520px] lg:h-[820px] w-full" src="Big-ship-with-containers-image-copy.jpeg" alt="">
                <div class="relative md:pb-32 sm:px-6 lg:h-[120px] lg:items-center lg:pt-44">
                    <div class="text-white text-center">
                        <h1 class="text-3xl font-bold sm:text-5xl">
                            Are you looking to trade <span class="text-primary-two">seamlessly</span> in <span class="text-primary-two">Africa?</span>
                        </h1>

                        <div class="mt-8 flex flex-wrap justify-center gap-4 text-center">
                            <button class="px-8 py-4 bg-primary-one text-white font-semibold rounded-md">Learn More</button>
                        </div>

                        <div class="flex flex-wrap justify-center gap-6 md:gap-10 pt-2 md:pt-20">
                            <div class="flex gap-2">
                                <i class="fa fa-mobile text-primary-one text-xl" aria-hidden="true"></i>
                                <span class="text-primary-two text-xl">+254704341365</span>
                            </div>
                            <div class="flex gap-2 text-primary-two">
                                <i class="fa fa-envelope text-primary-one text-xl" aria-hidden="true"></i>
                                <span class="text-primary-two text-xl">info@realsources.africa</span>
                            </div>
                            <div class="flex gap-2 text-primary-two">
                                <i class="fa fa-podcast text-primary-one text-xl" aria-hidden="true"></i>
                                <span class="text-primary-two text-xl">www.realsources.africa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="relative lg:mt-[20rem] bg-white py-2">
                <h1 class="text-3xl text-center md:my-3 font-semibold text-primary-two">Some of Our Partners</h1>
                <div class="px-4 lg:px-24 flex flex-nowrap gap-4 overflow-x-auto md:mt-4 no-scrollbar">
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="Logo.png" class="h-20 w-52 object-contain" alt="">
                    </div>
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="Logo.png" class="h-20 w-52 object-contain" alt="">
                    </div>
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="Logo.png" class="h-20 w-52 object-contain" alt="">
                    </div>
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="Logo.png" class="h-20 w-52 object-contain" alt="">
                    </div>
                    <div class="flex-shrink-0 p-8 bg-slate-50 rounded-lg border-2">
                        <img src="Logo.png" class="h-20 w-52 object-contain" alt="">
                    </div>
                </div>
            </div>

            <div class="pb-8 pt-8">
                <div class="">
                    <img src="Port-with-sunset-image-copy.jpeg" alt="" class="hidden md:block w-full object-cover h-[40rem]">
                </div>
                <div class="px-2 lg:px-24 md:p-12 bg-white rounded-lg relative md:-mt-[32rem] md:w-[70%] mx-auto">
                    <div class="lg:my-auto flex flex-col justify-center">
                        <h2 class="text-2xl font-bold text-center text-primary-two">A one-stop B2B platform for African businesses to import and export seamlessly</h2>
                    </div>
                    <div class="flex justify-center">
                        <a href="https://dev.realsources.africa/partners" class="bg-primary-one text-white px-6 py-4 rounded-lg text-center mt-2 lg:mt-24 font-semibold">Become a Partner</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 lg:mt-24 pb-8">
                <div class="">
                    <img src="Map-image-copy.jpeg" alt="" class="hidden lg:block w-full object-cover lg:h-[40rem]">
                </div>
                <div class="p-10 px-4 lg:px-24 bg-white rounded-lg relative lg:grid lg:grid-cols-2 lg:gap-24 lg:-mt-[38rem] w-[75%] mx-auto">
                    <div>
                        <img src="283235-P69CJ3-39.png" alt="" class="w-[80%] object-cover">
                        <div class="md:-mt-52">
                            <h1 class="text-2xl my-5 pt-6 font-semibold text-primary-two text-center md:text-left">Selling with us means seamless access to markets in all 54 countries of Africa</h1>
                            <a href="https://market.realsources.africa/register?type=vendor" class="bg-primary-one p-4 rounded-md text-white font-semibold flex justify-center lg:block w-fit">Start Selling Now</a>
                        </div>
                    </div>
                    <ul class="list-decimal font-semibold text-lg space-y-6 text-center md:text-left">
                        <li>Discover new local nad global business opportunities.</li>
                        <li>Get funding solutions and financial services.</li>
                        <li>Access reliable trade transactions.</li>
                        <li>Explore market information, trends and insights that will help you make informed decisions.</li>
                    </ul>
                </div>
            </div>

            <div class="pb-8 pt-8">
                <div class="">
                    <img src="white-and-green-Eukor-ship-copy.jpeg" alt="" class="hidden md:block w-full object-cover md:h-[25rem] lg:h-[40rem]">
                </div>
                <div class="px-4 lg:px-24 relative md:-mt-[20rem] md:flex">
                    <div class="hidden md:basis-1/3">
                    </div>
                    <div class="md:basis-2/3">
                        <h1 class="text-4xl text-primary-two font-bold pb-12">Get Instant Quotes from Verified Sellers in Africa</h1>
                        <a href="https://market.realsources.africa" class="font-semibold text-white p-3 bg-primary-two rounded-lg">Get Quotes</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 md:mt-48">
                <h1 class="text-primary-two font-bold text-4xl">FAQs</h1>
                <div class="px-2 lg:px-[35rem]" id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span class="">How does this work?</span>
                    <svg data-accordion-icon class="w-5 h-5 p-1 rotate-180 border border-primary-two rounded-full shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5">
                    <p class="mb-2 font-semibold">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span>What are the benefits?</span>
                    <svg data-accordion-icon class="w-5 h-5 p-1 rotate-180 border border-primary-two rounded-full shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 font-semibold">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span>Is it difficult to use?</span>
                    <svg data-accordion-icon class="w-5 h-5 p-1 rotate-180 border border-primary-two rounded-full shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 font-semibold">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-4">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-bold" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                    <span>Can I have custom pricing?</span>
                    <svg data-accordion-icon class="w-5 h-5 p-1 rotate-180 border border-primary-two rounded-full shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                    <p class="mb-2 font-semibold">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                    </div>
                </div>
                </div>
            </div>

            <div class="px-2 lg:px-24 mt-4 pb-12 flex gap-12">
                <div class="flex flex-col">
                    <h1 class="text-2xl font-bold">Real Sources Africa</h1>
                    <span class="font-bold text-lg">2024 &copy; RSA</span>
                    <span class="font-bold">All rights reserved</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 lg:gap-24 mt-8">
                    <div class="text-center md:text-left">
                        <ul>
                            <li><p class="font-bold">About</p></li>
                            <li><p class="font-bold">Help</p></li>
                            <li><p class="font-bold">Media</p></li>
                        </ul>
                    </div>
                    <div class="text-center md:text-left">
                        <ul>
                            <li><p class="font-bold">Careers</p></li>
                            <li><p class="font-bold">FAQs</p></li>
                            <li><p class="font-bold">Contact Us</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    </body>
</html>
