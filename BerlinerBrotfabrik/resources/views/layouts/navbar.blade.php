<!-- Header with the Logo at the center -->
<header class="gb-green text-white">
    <div class="container mx-auto flex justify-center items-center">
        <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-20">
        </a>
    </div>
</header>
<header class="gb-white gb-green-text py-7">
    <div class="container text-xl mx-auto flex justify-center items-center">
        <a href="/Menu" class="{{ Request::is('/Menu') ? 'underline' : '' }} mx-6">Menu</a>
        <a href="/Aboutus" class="{{ Request::is('Aboutus') ? 'underline' : '' }} mx-6">About us</a>
        <a href="#" class="{{ Request::is('Contactus') ? 'underline' : '' }} mx-6">Contact us</a>
    </div>
</header>