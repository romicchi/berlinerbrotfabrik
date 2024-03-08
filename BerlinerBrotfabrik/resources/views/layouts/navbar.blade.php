<!-- Header with the Logo at the center -->
<header class="gb-green text-white">
    <div class="container mx-auto flex justify-center items-center">
        <a href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-15 lg:h-20">
        </a>
    </div>
</header>
<header class="gb-white gb-green-text py-7">
    <div class="container text-sm sm:text-xl mx-auto flex justify-center items-center">
        <a href="/Menu" class="{{ Request::is('/Menu') ? 'underline' : '' }} mx-6">Menu</a>
        <a href="/Aboutus" class="{{ Request::is('Aboutus') ? 'underline' : '' }} mx-6 text-center">Tentang Kami</a>
        <a href="/Contactus" class="{{ Request::is('Contactus') ? 'underline' : '' }} mx-6 text-center">Hubungi Kami</a>
    </div>
</header>