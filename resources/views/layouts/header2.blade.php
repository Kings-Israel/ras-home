<div class="sticky top-0 bg-white flex flex-wrap lg:flex-nowrap lg:items-center justify-between mx-auto py-1 lg:px-24 md:px-2 z-40 duration-200" id="main-header">
    <div class="flex gap-2">
        <a href="{{ url('/') }}" class="">
            <x-application-logo class="w-[10rem] object-contain" />
        </a>
        <div class="hidden lg:block my-auto partners">
            <ul class="flex flex-wrap lg:flex-nowrap whitespace-nowrap gap-10 text-primary-two">
                <li class="font-bold @if(request()->routeIs('partners.about')) active @endif">
                    <a href="{{ route('partners.about') }}">
                        About Us
                    </a>
                </li>
                <li class="font-bold @if(request()->routeIs('partners.index')) active @endif">
                    <a href="{{ route('partners.index') }}">Partner With Us</a>
                </li>
                <li class="font-bold @if(request()->routeIs('partners.vendors')) active @endif">
                    <a href="{{ route('partners.vendors') }}">
                        Sell
                    </a>
                </li>
                <li class="font-bold">
                    <a href="{{ config('app.marketplace_url') }}/buyer/orders">
                        Buy
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex space-x-2">
        <a href="{{ route('partners.contact') }}" class="font-bold my-auto text-primary-two">
            Contact us
        </a>
        <a href="{{ config('app.marketplace_url') }}/login" class="hidden my-auto md:block">
            <x-primary-button class="py-2 h-fit whitespace-nowrap">Visit Shop</x-primary-button>
        </a>
    </div>
</div>
