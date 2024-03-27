<!-- FOOTER -->
<style>

.footer-top-area {
    position: relative;
}

.footer-top-area::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 20px;
    background-size: contain;
    background-repeat: repeat-x;
}

    </style>
<footer class="footer-top-area gb-green gb-white-text py-6 px-10" id="footer-container">
    <div class="container mx-auto flex flex-wrap justify-between items-start mt-10">
        <div class="w-full px-2 sm:w-1/2 md:w-1/4 mb-4">
            <p class="text-3xl font-bold text-logo">Berliner Brotfabrik</p>
            <p class="mb-6 mt-6">
                {!! __('messages.Berliner Footer Description') !!}
            </p>
        </div>
        <div class="w-full px-2 sm:w-1/2 md:w-1/4 mb-4">
            <h3 class="text-lg font-semibold mb-2">
                {!! __('messages.Information') !!}
            </h3>
            <ul class="list-none">
                <li><a href="/Menu" class="text-white hover:text-gray-300">
                    {!! __('messages.Menu') !!}
                </a></li>
                <li><a href="/Aboutus" class="text-white hover:text-gray-300">
                    {!! __('messages.About Us') !!}
                </a></li>
                <li><a href="/Contactus" class="text-white hover:text-gray-300">
                    {!! __('messages.Contact Us') !!}
                </a></li>
            </ul>
        </div>
        <div class="w-full px-2 sm:w-1/2 md:w-1/4 mb-4">
            <h3 class="text-lg font-semibold mb-2">
                {!! __('messages.Contact Us') !!}
            </h3>
            <p>+62 81 322 088 480
                <br>berlinerbrotfabrik2014@gmail.com
                <br>Jalan Gunung Sari No 25,
                <br>Lengkongsari, Tasikmalaya,
                <br>Jawa Barat, 4611
                <br>Indonesia
            </p>
        </div>
        <div class="w-full px-2 sm:w-1/2 md:w-1/4 mb-4">
            <h3 class="text-lg font-semibold mb-2">
                {!! __('messages.Store Open') !!}
            </h3>
            <p>
                {!! __('messages.Monday - Saturday') !!}
            </p>
            <p>
                {!! __('messages.Sunday') !!}
            </p>
        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="container mx-auto flex flex-col-reverse sm:flex-row justify-center items-center mt-6">
        <p>Copyright &copy; 2024 by Berliner Brotfabrik.</p>
        <div class="flex items-center mb-4 sm:mb-0">
            <a href="https://www.facebook.com/profile.php?id=100058154600282" class="text-white hover:text-gray-300 mx-2">
                <img src="{{ asset('img/facebook_icon.png') }}" alt="Facebook" class="w-5 h-5 md:w-5 md:h-5 lg:w-5 lg:h-5" loading="lazy">
            </a>
            <a href="https://www.instagram.com/berlinerbrotfabrik/?hl=en" class="text-white hover:text-gray-300 mx-2">
                <img src="{{ asset('img/instagram_icon.png') }}" alt="Instagram" class="w-5 h-5 md:w-5 md:h-5 lg:w-5 lg:h-5" loading="lazy">
            </a>
            <a href="https://www.tiktok.com/@berlinerbrotfabrik" class="text-white hover:text-gray-300 mx-2">
                <img src="{{ asset('img/whatsapp_icon.png') }}" alt="WhatsApp" class="w-5 h-5 md:w-5 md:h-5 lg:w-5 lg:h-5" loading="lazy">
            </a>
            <a href="https://wa.me/6281220000000" class="text-white hover:text-gray-300 mx-2 ">
                <img src="{{ asset('img/tiktok_icon.png') }}" alt="TikTok" class="w-5 h-5 md:w-5 md:h-5 lg:w-5 lg:h-5" loading="lazy">
            </a>
        </div>
    </div>
</footer>