<!DOCTYPE html>
<html>
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
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
        <link href="{{ asset('css/contactus.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('layouts.navbar')
        <!-- SUB-HEADER -->
        <header class="bg-center bg-no-repeat bg-cover py-2 lg:py-4 bg-gray-200 bg-blend-multiply" style="background-image: url('/img/sub-header.png');" loading="lazy">
            <div class="mx-5 max-w-screen-xl text-center lg:text-left">
                <p class="text-sm lg:text-lg font-normal text-gray-200 lg:text-outline tracking-widest">Home / Hubungi kami</p>
            </div>
        </header>
        
        <!-- CONTACTS INFORMATION -->
        <section class="container mx-auto flex items-center justify-center py-12 lg:py-12 lg:pl-16 lg:pr-16">
            <div class="text-center">
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight leading-none gb-green-text md:text-3xl lg:text-3xl">Kami ingin mendengar pendapat anda</h2>
                <p class="mb-8 text-xl font-bold text-gray-700">Hubungi Kami</p>
            </div>
        </section>

        <div class="flex flex-wrap justify-around py-6">
            <!-- First Card -->
            <div class="w-full mx-10 my-10 sm:w-1/2 md:w-1/3 lg:mx-12 lg:my-12 lg:w-1/4 xl:w-1/4 mb-4 shadow-green-reverse">
                <div class="text-center shadow p-6 h-full flex flex-col items-center justify-center">
                    <div class="flex items-center justify-center w-12 h-12 text-white gb-green rounded-full">
                        <i class="fas fa-map-marker-alt text-2xl gb-text-white"></i>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="mb-2 text-gray-800 font-bold">Lokasi Kami</h2>
                        <p class="text-gray-700">Jalan Gunung Sari No 25, lengkongsari Tasikmalaya, West Java, Indonesia 46111</p>
                    </div>
                </div>
            </div>

            <!-- Second Card -->
            <div class="w-full mx-10 my-10 sm:w-1/2 md:w-1/3 lg:mx-12 lg:my-12 lg:w-1/4 xl:w-1/4 mb-4 shadow-green-reverse">
                <div class="text-center shadow p-6 h-full flex flex-col items-center justify-center">
                    <div class="flex items-center justify-center w-12 h-12 text-white gb-green rounded-full">
                        <i class="fas fa-map-marker-alt text-2xl gb-text-white"></i>
                    </div>              
                    <div data-aos="fade-up" data-aos-duration="1000">      
                        <h2 class="mb-2 text-gray-800 font-bold">Nomor Telpon</h2>
                        <p class="text-gray-700">+62 813-2208-8480</p>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="w-full mx-10 my-10 sm:w-1/2 md:w-1/3 lg:mx-12 lg:my-12 lg:w-1/4 xl:w-1/4 mb-4 shadow-green-reverse">
                <div class="gb-white text-center shadow p-6 h-full flex flex-col items-center justify-center">
                    <div class="flex items-center justify-center w-12 h-12 text-white gb-green rounded-full">
                        <i class="fas fa-map-marker-alt text-2xl gb-text-white"></i>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="mb-2 text-gray-800 font-bold">Email Kami</h2>
                        <p class="text-gray-700">Berliner@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAP -->
        <div class="container mx-auto flex flex-col items-center justify-center mt-12 py-12 px-4 lg:mt-16 lg:py-12 lg:pl-16 lg:pr-16">
            <div class="w-full relative pt-3/4">
                <iframe class="mx-auto w-full shadow-xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.863128854662!2d108.23248231477416!3d-7.326966594690312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5759cd1193b7%3A0x28936ede5bcdaf0f!2sJl.%20Gn.%20Sari%20No.25%2C%20Lengkongsari%2C%20Kec.%20Tawang%2C%20Kab.%20Tasikmalaya%2C%20Jawa%20Barat%2046111%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1646563529329!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- LINE -->
        <div class="w-full mt-12 gb-green lg:mt-16 h-0.5 bg-gray-800"></div>

        <!-- CONTACT NOW -->
        <section class="container mx-auto flex items-center justify-center mt-12 lg:mt-16 lg:pl-16 lg:pr-16">
            <div class="text-center">
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight leading-none gb-green-text md:text-3xl lg:text-3xl">Kontak Sekarang</h2>
                <p class="mb-8 text-xl font-bold text-gray-700">Kirim pesan pada kami</p>
            </div>
        </section>

        <!-- FORM -->
        <section class="container mx-auto flex items-center justify-center mb-12 mt-12 lg:mb-16 lg:mt-16 lg:pl-16 lg:pr-16">
            <form class="w-full max-w-lg" method="POST" action="{{ route('submit.form') }}">
                {{ csrf_field() }}
                <div class="flex flex-wrap mb-6">
                    <div class="w-full md:w-1/2 px-8 lg:px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Name
                        </label>
                        <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" maxlength="250" type="text" placeholder="Name">
                        @error('name')
                            <small _ngcontent-irw-c66 class="text-danger">* Keyword is required.</small>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-8 lg:px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            Email
                        </label>
                        <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="email" maxlength="250" type="email" placeholder="Email">
                        @error('email')
                            <small _ngcontent-irw-c66 class="text-danger">* Keyword is required.</small>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-full px-8 lg:px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Phone Number
                        </label>
                        <input name="phone" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="phone" maxlength="250" type="tel" placeholder="+1 (000) 000-0000">
                        @error('phone')
                            <small _ngcontent-irw-c66 class="text-danger">* Keyword is required.</small>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-full px-8 lg:px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                            Message
                        </label>
                        <textarea name="message" class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-48 resize-none" id="message" maxlength="25000" placeholder="Message"></textarea>
                        @error('message')
                            <small _ngcontent-irw-c66 class="text-danger">* Keyword is required.</small>
                        @enderror
                    </div>
                </div>
                <div class="md:flex md:items-center justify-center text-center">
                    <div class="md:w-1/3" data-aos="zoom-out" data-aos-duration="1000">
                        <button class="shadow gb-green hover:bg-green-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </section>
        @include('layouts.footer')
    </body>
</html>

<script>
    AOS.init();
</script>