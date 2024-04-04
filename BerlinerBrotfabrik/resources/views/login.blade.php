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
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.navbar')

        <!-- login container form -->
        <div class="flex items-center justify-center min-h-screen gb-lgreen flex-col">
            <div class="text-center">
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight leading-none gb-white-text md:text-3xl lg:text-3xl">Admin Login</h2>
                <p class="mb-8 text-xl font-bold text-gray-700">Login to your account</p>
            </div>            
            <div class="w-full max-w-md px-4">
                <form class="gb-white shadow-lg rounded px-4 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-2xl flex gb-green-text justify-center border-b-2 py-3 mb-4">
                        <span>Sign in</span>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Username
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="username" type="text" placeholder="Username" autocomplete="off">
                        @error('name')
                            <small class="text-red-500 text-xs italic">* Username is required.</small>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="******************">
                        @error('password')
                            <small class="text-red-500 text-xs italic">* Password is required.</small>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="w-full gb-green hover:bg-green-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        @include('layouts.footer')
    </body>
</html>
