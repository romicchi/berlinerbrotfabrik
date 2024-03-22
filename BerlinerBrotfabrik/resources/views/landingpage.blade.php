<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.navbar')
        <!-- Jumbotron -->
        <section class="bg-center bg-no-repeat bg-cover bg-gray-200 bg-blend-multiply" style="background-image: url('/img/jumbotron.png');" loading="lazy">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <p class="mb-12 text-lg font-extrabold text-gray-200 text-outline lg:text-4xl sm:px-16 lg:px-48 md:text-4xl tracking-widest">First German Bakery and <br> Pastry in Tasikmalaya</p>
                <h1 class="mb-4 mt-5 text-4xl font-extrabold text-outline leading-none text-white md:text-5xl lg:text-6xl tracking-widest">We Make Life <br> Healthy with Less <br> Calorie</h1>
            </div>
        </section>

        <!-- Container with Image at the left side landscape then at the right is the "Get To Know Us" with the description "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. and a button "Our Story""-->
        <section class="container mx-auto flex flex-col lg:flex-row items-center justify-center py-24 lg:py-32 lg:pl-16 lg:pr-16">
            <div class="lg:w-1/2 lg:pr-16 mb-8 lg:mb-0">
                <img src="{{ asset('img/about.png') }}" alt="Bakery" class="rounded-lg">
            </div>
            <div class="lg:w-1/2 text-center">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-none gb-green-text md:text-4xl lg:text-5xl">Get To Know Us</h2>
                <p class="mb-8 text-lg font-normal text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="inline-block px-8 py-3 text-sm font-semibold leading-relaxed text-gray-800 bg-gray-200 rounded hover:bg-green-900 hover:text-gray-200">Our Story</a>
            </div>          
        </section>

        <!-- Landscape Format Section in Row Format -->
        <div class="flex items-center justify-center mt-16 mb-16 lg:mt-0 lg:ml-16">
            <div class="flex flex-row">
                <div class="mr-8 flex flex-col items-center text-center">
                    <div class="flex items-center justify-center w-16 h-16 text-white gb-green rounded-full">
                        <i class="fas fa-star fa-2x"></i>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold gb-green-text">Consistent Quality</h3>
                    <p class="mt-2 text-sm font-normal text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="mr-8 flex flex-col items-center text-center">
                    <div class="flex items-center justify-center w-16 h-16 text-white gb-green rounded-full">
                        <i class="fas fa-leaf fa-2x"></i>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold gb-green-text">Fresh</h3>
                    <p class="mt-2 text-sm font-normal text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="mr-8 flex flex-col items-center text-center">
                    <div class="flex items-center justify-center w-16 h-16 text-white gb-green rounded-full">
                        <i class="fas fa-utensils fa-2x"></i>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold gb-green-text">Tasty</h3>
                    <p class="mt-2 text-sm font-normal text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="mr-8 flex flex-col items-center text-center">
                    <div class="flex items-center justify-center w-16 h-16 text-white gb-green rounded-full">
                        <i class="fas fa-heart fa-2x"></i>
                    </div>
                    <h3 class="mt-4 text-xl font-semibold gb-green-text">Less / Low Calories</h3>
                    <p class="mt-2 text-sm font-normal text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>

        <!-- New container, at the left center side the header Things We Make the description: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. and a button "Full Menu". then at the right side is three image -->
        <div class="gb-lgreen bg-blend-multiply bg-center bg-no-repeat">
            <section class="container mx-auto flex flex-col lg:flex-row items-center justify-center py-24 lg:py-32 w-full">
                <div class="lg:w-1/2 lg:pr-16 mb-8 text-center lg:mb-0">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-none gb-lgreen-text md:text-4xl lg:text-5xl">Things We Make</h2>
                    <p class="mb-8 text-lg font-normal gb-lgreen-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="inline-block px-8 py-3 text-sm font-semibold leading-relaxed text-gray-800 bg-gray-200 rounded hover:bg-green-900 hover:text-gray-200">Full Menu</a>
                </div>
                <div class="lg:w-1/2 flex flex-row justify-center items-center">
                    <div class="mr-8">
                        <img src="{{ asset('images/bread.jpg') }}" alt="Bread" class="rounded-lg">
                    </div>
                    <div class="mr-8">
                        <img src="{{ asset('images/cake.jpg') }}" alt="Cake" class="rounded-lg">
                    </div>
                    <div>
                        <img src="{{ asset('images/pastry.jpg') }}" alt="Pastry" class="rounded-lg">
                    </div>
                </div>
            </section>
        </div>
    @include('layouts.footer')
    </body>
</html>