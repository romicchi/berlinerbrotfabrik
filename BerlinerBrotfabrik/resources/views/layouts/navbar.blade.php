<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<header class="gb-green text-white">
    <div class="container mx-auto flex justify-center items-center">
        <a href="/Welcome">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-15 lg:h-20">
        </a>
    </div>
</header>
<header class="gb-white gb-green-text py-7">
    <div class="container text-sm sm:text-xl mx-auto flex justify-center items-center">
        <a href="/Menu" class="{{ Request::is('Menu') ? 'underline text-important' : '' }} mx-6">{{ __('messages.Menu') }}</a>
        <a href="/Aboutus" class="{{ Request::is('Aboutus') ? 'underline' : '' }} mx-6 text-center">{{ __('messages.About Us') }}</a>
        <a href="/Contactus" class="{{ Request::is('Contactus') ? 'underline' : '' }} mx-6 text-center">{{ __('messages.Contact Us') }}</a>
        @if(Auth::check())
            @php
                $currentRoute = Route::currentRouteName();
            @endphp

            @if($currentRoute == 'menupage' || $currentRoute == 'aboutus' || $currentRoute == 'contactus' || $currentRoute == 'Welcome')
                <a href="{{ route('adminpage') }}" class="mx-6">Admin</a>
            @else
                <a href="{{ route('logout') }}" class="mx-6"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endif
        @endif
    @csrf
        <form id="langForm" action="{{ route('lang.switch', app()->getLocale()) }}" method="POST">
    @csrf
    <select name="lang" onchange="this.form.submit()">
        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
        <option value="id" {{ app()->getLocale() == 'id' ? 'selected' : '' }}>Indonesia</option>
    </select>
</form>
    </div>
</header>
</html>