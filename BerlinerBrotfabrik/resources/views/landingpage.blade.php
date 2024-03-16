<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Berliner Brotfabrik</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">        
        <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.navbar')
        <!-- Jumbotron -->
        <section class="bg-center bg-no-repeat bg-cover bg-gray-200 bg-blend-multiply" style="background-image: url('/img/jumbotron.png');" loading="lazy">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <p class="mb-12 text-lg font-extrabold text-gray-200 text-outline lg:text-4xl sm:px-16 lg:px-48 md:text-4xl tracking-widest" data-aos="fade-in" data-aos-duration="1000">{!! __('messages.First German Bakery') !!}</p>
                <h1 class="mb-4 mt-5 text-4xl font-extrabold text-outline leading-none text-white md:text-5xl lg:text-6xl tracking-widest" data-aos="fade-up" data-aos-duration="1000">
                {!! __('messages.We Make Life Healthy') !!}</h1>
            </div>
        </section>

        <!-- GET TO KNOW US -->
        <section class="container mx-auto flex flex-col lg:flex-row items-center justify-center py-24 lg:py-32 lg:pl-16 lg:pr-16">
            <div class="lg:w-1/2 lg:pr-16 mb-8 lg:mb-0 px-4 sm:px-0">
            <img src="{{ asset('img/about.png') }}" alt="Bakery" data-aos="fade-up" data-aos-duration="1500" class="rounded-lg shadow-green hover-effect z-10">
        </div>
            <div class="lg:w-1/2 text-center" data-aos="fade-in" data-aos-duration="1000">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-none gb-green-text md:text-4xl lg:text-5xl">
                    {!! __('messages.Get To Know Us') !!}
                </h2>
                <p class="mb-8 text-lg font-normal text-gray-600">
                    {!! __('messages.Lorem') !!}
                </p>
                <a href="#" class="inline-block px-8 py-3 text-sm font-semibold leading-relaxed text-gray-800 bg-gray-200 rounded hover:bg-green-900 hover:text-gray-200" data-aos="zoom-out" data-aos-duration="1000">
                    {!! __('messages.Our Story') !!}
                </a>
            </div>          
        </section>

        <!-- FOUR QUALITIES -->
        <div class="flex flex-wrap items-center justify-center mt-16 mb-16 lg:mt-0 lg:ml-16">
            <div class="w-full sm:w-1/2 md:w-1/4 px-4 flex flex-col items-center text-center mb-8 md:mb-0">
                <div class="flex items-center justify-center w-16 h-16 text-white gb-green rounded-full">
                    <i class="fas fa-star fa-2x icon-hover"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold gb-green-text">
                    {!! __('messages.Consistent Quality') !!}
                </h3>
                <p class="mt-2 text-sm font-normal text-gray-600">
                    {!! __('messages.Lorem') !!}
                </p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4 flex flex-col items-center text-center mb-8 md:mb-0">
                <div class="flex items-center justify-center w-16 h-16 text-white gb-green rounded-full">
                    <i class="fas fa-leaf fa-2x icon-hover"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold gb-green-text">
                    {!! __('messages.Fresh') !!}
                </h3>
                <p class="mt-2 text-sm font-normal text-gray-600">
                    {!! __('messages.Lorem') !!}
                </p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4 flex flex-col items-center text-center mb-8 md:mb-0">
                <div class="flex items-center justify-center w-16 h-16 text-white gb-green rounded-full">
                    <i class="fas fa-utensils fa-2x icon-hover"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold gb-green-text">
                    {{ __('messages.Sweet') }}
                </h3>
                <p class="mt-2 text-sm font-normal text-gray-600">
                    {!! __('messages.Lorem') !!}
                </p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4 flex flex-col items-center text-center">
                <div class="flex items-center justify-center w-16 h-16 text-white gb-green rounded-full">
                    <i class="fas fa-heart fa-2x icon-hover"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold gb-green-text">
                    {!! __('messages.Low Calorie') !!}
                </h3>
                <p class="mt-2 text-sm font-normal text-gray-600">
                    {!! __('messages.Lorem') !!}
                </p>
            </div>
        </div>

        <!-- THINGS WE MAKE -->
        <div class="gb-lgreen bg-blend-multiply bg-center bg-no-repeat">
            <section class="container mx-auto flex flex-col lg:flex-row items-center justify-center py-32 lg:py-40 w-full">
                <div class="lg:w-1/2 lg:pr-16 mb-8 text-center lg:mb-0" data-aos="fade-in" data-aos-duration="1000">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-none gb-lgreen-text md:text-4xl lg:text-5xl">
                        {!! __('messages.Things We Make') !!}
                    </h2>
                    <p class="mb-8 text-lg font-normal gb-lgreen-text">
                        {!! __('messages.Lorem') !!}
                    </p>
                    <a href="#" class="inline-block px-8 py-3 text-sm font-semibold leading-relaxed text-gray-800 bg-gray-200 rounded hover:bg-green-900 hover:text-gray-200" data-aos="zoom-out" data-aos-duration="1000">
                        {!! __('messages.Full Menu') !!}
                    </a>
                </div>
                <div class="lg:w-1/2 flex flex-row justify-center items-center">
                    <div class="mr-8 relative mb-12 hover-effect" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('img/cake.png') }}" alt="Cake" class="rounded-lg shadow-lgreen" loading="lazy">
                        <div class="absolute top-0 left-0 w-full h-full flex items-start justify-start p-2">
                            <p class="text-white text-normal lg:text-2xl font-bold">Cake</p>
                        </div>
                    </div>
                    <div class="mr-8 relative mt-12 hover-effect" data-aos="fade-down" data-aos-duration="1000">
                        <img src="{{ asset('img/pastry.png') }}" alt="Pastry" class="rounded-lg shadow-lgreen" loading="lazy">
                        <div class="absolute top-0 left-0 w-full h-full flex items-start justify-start p-2">
                            <p class="text-white text-normal lg:text-2xl font-bold">Pastry</p>
                        </div>
                    </div>
                    <div class="mr-8 relative mb-12 hover-effect" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('img/drink.png') }}" alt="Drink" class="rounded-lg shadow-lgreen" loading="lazy">
                        <div class="absolute top-0 left-0 w-full h-full flex items-start justify-start p-2">
                            <p class="text-white text-normal lg:text-2xl font-bold">Drink</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @include('layouts.footer')
    </body>
</html>

<script>
    AOS.init();
</script>
<script>
        document.getElementById('langForm').addEventListener('change', function() {
            this.submit();
        });
    </script>