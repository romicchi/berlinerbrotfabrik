<style>
 #footer-container {
     background-image:
         radial-gradient(circle at 50% 100%, transparent 12px, #0099ff 12px, #0099ff 15px, transparent 15px),
         radial-gradient(circle at 50% calc(100% - 1px), #0099ff 12px, transparent 12px);
     background-size: 30px 30px;
     background-repeat: repeat-x;
 }
</style>
   
<!-- Footer -->
<footer class="gb-green gb-white-text py-6 px-10" id="footer-container">
    <div class="container mx-auto flex flex-wrap justify-between items-start mt-10">
        <div class="w-full sm:w-1/2 md:w-1/4">
            <p class="text-3xl font-bold text-logo">Berliner Brotfabrik</p>
            <p class="mb-6 mt-6">Lorem ipsum is not simply random text roots to popular pular belief It has roots in a piece of classic</p>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4">
            <h3 class="text-lg font-semibold mb-2">Information</h3>
            <ul class="list-none">
                <li><a href="#aboutus-container" class="text-white hover:text-gray-300">Menu</a></li>
                <li><a href="#pricing-container" class="text-white hover:text-gray-300">About Us</a></li>
                <li><a href="#contactus-container" class="text-white hover:text-gray-300">Contact Us</a></li>
            </ul>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4">
            <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
            <p>hmpconsultingph@gmail.com</p>
            <p>Jalan Gunung Sari No 25, lengkongsari Tasikmalaya, West Java, Indonesia 46111</p>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4">
            <h3 class="text-lg font-semibold mb-2">Store Open</h3>
            <p>Mon to Sat : 10:00AM to 8:00PM</p>
            <p>Sunday : 8:00AM to 6:00PM</p>
        </div>
    </div>
    <!-- at the center right beside the copyright can you add logo for facebook, instagram, whatsapp, and tiktok -->
    <div class="container mx-auto flex justify-center items-center mt-6">
        <p>Copyright &copy; 2024 by Berliner Brotfabrik.</p>
        <div class="flex items-center">
            <a href="#" class="text-white hover:text-gray-300 mx-2">
                <img src="{{ asset('img/facebook_icon.png') }}" alt="Facebook" class="w-5 h-5" loading="lazy">
            </a>
            <a href="#" class="text-white hover:text-gray-300 mx-2">
                <img src="{{ asset('img/instagram_icon.png') }}" alt="Instagram" class="w-5 h-5" loading="lazy">
            </a>
            <a href="#" class="text-white hover:text-gray-300 mx-2">
                <img src="{{ asset('img/whatsapp_icon.png') }}" alt="WhatsApp" class="w-5 h-5" loading="lazy">
            </a>
            <a href="#" class="text-white hover:text-gray-300 mx-2">
                <img src="{{ asset('img/tiktok_icon.png') }}" alt="TikTok" class="w-5 h-5" loading="lazy">
            </a>
        </div>
    </div>
</footer>