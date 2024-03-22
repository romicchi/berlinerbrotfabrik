<!-- Header with the Logo at the center -->
<header class="gb-green text-white">
    <div class="container mx-auto flex justify-center items-center">
        <a href="#">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-20">
        </a>
    </div>
</header>
<header class="gb-white gb-green-text py-7">
    <div class="container text-xl mx-auto flex justify-center items-center">
        <a href="{{ route('menupage') }}" class="mx-6">Menu</a>
        <a href="#" class="mx-6">About us</a>
        <a href="#" class="mx-6">Contact us</a>
        @if(Auth::check())
            @php
                $currentRoute = Route::currentRouteName();
            @endphp

            @if($currentRoute == 'menupage' || $currentRoute == 'aboutus' || $currentRoute == 'contactus')
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
    </div>
</header>