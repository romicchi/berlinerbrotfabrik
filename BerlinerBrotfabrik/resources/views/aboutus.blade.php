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
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
        <link href="{{ asset('css/aboutus.css') }}" rel="stylesheet">
    </head>
    <body>
    @include('layouts.navbar')
        <!-- SUB-HEADER -->
        <header class="bg-center bg-no-repeat bg-cover py-2 lg:py-4 bg-gray-200 bg-blend-multiply" style="background-image: url('/img/sub-header.png');" loading="lazy">
            <div class="mx-5 max-w-screen-xl text-center lg:text-left">
                <p class="text-sm lg:text-lg font-normal text-gray-200 lg:text-outline tracking-widest">Home / About us</p>
            </div>
        </header>

        <!-- OUR STORY -->
        <section class="container mx-auto flex flex-col lg:flex-row items-center justify-center pt-24 lg:pt-16 lg:pl-16 lg:pr-16 px-4 sm:px-0">
            <div class="lg:w-1/2 lg:pr-16 mb-8 lg:mb-0">
                <h2 class="mb-4 text-3xl font-bold tracking-tight leading-none gb-green-text text-center sm:text-left md:text-3xl lg:text-4xl">Our Story</h2>                
                <div class="w-20 h-1 gb-lgreen rounded-full mb-6 mx-auto sm:mx-0"></div>
                <p class="mb-8 text-lg font-normal text-justify text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="lg:w-1/2 lg:pl-0 overflow-hidden mb-4 sm:mb-4 md:mb-8">
                <img src="{{ asset('img/story.png') }}" alt="Story" class="transform transition duration-1000 hover:scale-110 object-scale-down w-full h-auto shadow-xl">
            </div>
        </section>

        <!-- WHO WE ARE -->
        <section class="container mx-auto flex flex-col-reverse lg:flex-row items-center justify-center pb-24 lg:pb-16 lg:pl-16 lg:pr-16 px-4 sm:px-0">
            <div class="lg:w-1/2 lg:pr-0 lg:mb-0 overflow-hidden mb-8 sm:mb-0">
                <img src="{{ asset('img/who-we-are.png') }}" alt="Who" class="transform transition duration-1000 hover:scale-110 object-scale-down w-full h-auto shadow-xl">
            </div>
            <div class="lg:w-1/2 lg:pl-16">
                <h2 class="mb-4 text-3xl font-bold tracking-tight leading-none gb-green-text text-center sm:text-left md:text-3xl lg:text-4xl">Who We Are</h2>
                <div class="w-20 h-1 gb-lgreen rounded-full mb-6 mx-auto sm:mx-0"></div>
                <p class="mb-8 text-lg font-normal text-justify text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </section>

        <!-- OUR TEAM -->
        <section class="container mx-auto text-center pt-24 lg:pt-16">
            <h2 class="mb-4 text-3xl font-bold tracking-tight leading-none gb-green-text md:text-3xl lg:text-4xl">Our Team</h2>
            <h3 class="font-bold text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
            <div class="w-20 h-1 gb-lgreen rounded-full mx-auto mt-6 mb-6"></div>
        </section>

        <section class="container mx-auto flex flex-col md:flex-row items-center justify-center pb-24 pt-24 md:pt-16 md:pl-16 md:pr-16">
            <div class="w-full md:w-1/3 px-4 md:pr-8 mb-8 md:mb-0 text-center">
                <img src="{{ asset('img/Harald.png') }}" alt="Team 1" class="rounded-lg hover-effect shadow-xl">
                <h3 class="mt-4 text-xl font-semibold gb-green-text">German Consultant</h3>
                <p class="font-medium text-gray-600">Harald Fuechsel</p>
                <p class="text-sm font-normal text-gray-600">Dipl.-Eng., Business Lawyer, German Senior Expert, Senator h.c. Education and Technology</p>
            </div>
            <div class="w-full md:w-1/3 px-4 md:pr-8 mb-8 md:mb-0 text-center">
                <img src="{{ asset('img/Hena.png') }}" alt="Team 2" class="rounded-lg hover-effect shadow-xl">
                <h3 class="mt-4 text-xl font-semibold gb-green-text">Owner</h3>
                <p class="font-medium text-gray-600">RD Hena Mulianakusumah</p>
                <p class="text-sm font-normal text-gray-600">
                    <br>Study in Germany, Regional Economic Development for SME and Start-Up (InWent),
                    <br>Education in First German Bakery Academy, Olpe,
                    <br>Training in Bakery Mohr in Frechen / Cologne,
                    <br>Training in Gradel Bakery and Pastry, Dresden,
                    <br>Involvement in Development of Bio- and Gluten free Bakery Products in the team of Dr. Quendt family, Freital / Dresden,
                </p>
            </div>
            <div class="w-full md:w-1/3 px-4 md:pr-8 mb-8 md:mb-0 text-center">
                <img src="{{ asset('img/Rari.png') }}" alt="Team 3" class="rounded-lg hover-effect shadow-xl">
                <h3 class="mt-4 text-xl font-semibold gb-green-text">Master Baker</h3>
                <p class="font-medium text-gray-600">Rari Gusep</p>
            </div>
        </section>

        <!-- SOCIALS -->
        <section class="gb-lgreen py-12">
            <div class="container mx-auto px-4 lg:px-16">
                <div class="flex flex-wrap -mx-2">
                    <!-- Top row -->
                    <div class="w-full sm:w-1/2 px-12 py-6 sm:py-12 mb-4 relative">
                        <div class="overflow-hidden shadow-xl">
                            <img src="{{ asset('img/social-fb.png') }}" alt="Social 1" class="mx-auto shadow-green transform transition duration-1000 hover:scale-110 object-scale-down">
                        </div>
                        <a href="https://www.facebook.com/profile.php?id=100058154600282" target="_blank">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white bg-opacity-75 flex flex-col items-center justify-center w-1/4 h-1/8">
                                <i class="fab fa-facebook-f text-blue-600"></i>
                                <p class="mt-2 text-center">Follow Us On Facebook</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 px-12 py-6 sm:py-12 mb-4 relative">
                        <div class="overflow-hidden shadow-xl">
                            <img src="{{ asset('img/social-instagram.png') }}" alt="Social 2" class="mx-auto shadow-green transform transition duration-1000 hover:scale-110 object-scale-down">
                        </div>
                        <a href="https://www.instagram.com/berlinerbrotfabrik/?hl=en" target="_blank">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white bg-opacity-75 flex flex-col items-center justify-center w-1/4 h-1/8">
                                <i class="fab fa-instagram text-purple-600"></i>
                                <p class="mt-2 text-center">Follow Us On Instagram</p>
                            </div>
                        </a>
                    </div>
                    <!-- Bottom row -->
                    <div class="w-full sm:w-1/2 px-12 py-6 sm:py-12 mb-4 relative">
                        <div class="overflow-hidden shadow-xl">
                            <img src="{{ asset('img/social-tiktok.png') }}" alt="Social 3" class="mx-auto shadow-green transform transition duration-1000 hover:scale-110 object-scale-down">
                        </div>
                        <a href="https://www.tiktok.com/@berlinerbrotfabrik" target="_blank">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white bg-opacity-75 flex flex-col items-center justify-center w-1/4 h-1/8">
                                <i class="fab fa-tiktok text-black"></i>
                                <p class="mt-2 text-center">Follow Us On TikTok</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-full sm:w-1/2 px-12 py-12 mb-4 relative">
                        <div class="overflow-hidden shadow-xl">
                            <img src="{{ asset('img/social-whatsapp.png') }}" alt="Social 4" class="mx-auto shadow-green transform transition duration-1000 hover:scale-110 object-scale-down">
                        </div>
                        <a href="https://wa.me/6281220000000" target="_blank">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white bg-opacity-75 flex flex-col items-center justify-center w-1/4 h-1/8">
                                <i class="fab fa-whatsapp text-green-600"></i>
                                <p class="mt-2 text-center">Message Us On WhatsApp</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section class="container gb-white mx-auto text-center pt-24 lg:pt-16">
            <h2 class="mb-4 text-3xl font-bold tracking-tight leading-none gb-green-text md:text-3xl lg:text-4xl">Testimonials</h2>
            <h3 class="text-2xl font-normal py-5 text-gray-600 lg:text-4xl">What Our Customer Say</h3>
            <div class="w-20 h-1 gb-lgreen rounded-full mx-auto mt-6 mb-6"></div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- SLIDE 1 -->
                    <div class="swiper-slide">
                        <div class="flex flex-wrap justify-center items-center">
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="bg-white rounded-lg shadow-lg p-8">
                                    <div class="text-left">
                                        <i class="fas fa-quote-left text-4xl text-gray-600 mb-4"></i>
                                    </div>
                                    <p class="mb-4 text-lg text-justify font-normal text-gray-600">"tempatnya enak nyaman dan bagus buat foto2 trs makanannya jga enak recomended bgt deh pkknya🥳😍💃"</p>
                                    <div class="flex items-center">
                                        <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('img/testimonies/ntha.png')}}" alt="profile">
                                        <p class="text-lg font-semibold text-gray-800">- Ntha Nata</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="bg-white rounded-lg shadow-lg p-8">
                                    <div class="text-left">
                                        <i class="fas fa-quote-left text-4xl text-gray-600 mb-4"></i>
                                    </div>                                    
                                    <p class="mb-4 text-lg text-justify font-normal text-gray-600">"Tempatnya nyaman, makanannya enak, 👍👍👍"</p>
                                    <div class="flex items-center">
                                        <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('img/testimonies/ella.png')}}" alt="profile">
                                        <p class="text-lg font-semibold text-gray-800">- Ella Yuliana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDE 2 -->
                    <div class="swiper-slide">
                        <div class="flex flex-wrap justify-center items-center">
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="bg-white rounded-lg shadow-lg p-8">
                                    <div class="text-left">
                                        <i class="fas fa-quote-left text-4xl text-gray-600 mb-4"></i>
                                    </div>                                    
                                    <p class="mb-4 text-lg font-normal text-gray-600">"Tempatnya nyaman dan bagus...apalagi makanannya recomended bgttt deh pkonyaa"</p>
                                    <div class="flex items-center">
                                        <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('img/testimonies/suci.png')}}" alt="profile">
                                        <p class="text-lg font-semibold text-gray-800">- Suci Sulistin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="bg-white rounded-lg shadow-lg p-8">
                                    <div class="text-left">
                                        <i class="fas fa-quote-left text-4xl text-gray-600 mb-4"></i>
                                    </div>                                    
                                    <p class="mb-4 text-lg font-normal text-gray-600">"cozy place with nice ambience. Freshly baked bread"</p>
                                    <div class="flex items-center">
                                        <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('img/testimonies/naomi.png')}}" alt="profile">
                                        <p class="text-lg font-semibold text-gray-800">- Naomi Stephany Manuhuwa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDE 3 -->
                    <div class="swiper-slide">
                        <div class="flex flex-wrap justify-center items-center">
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="bg-white rounded-lg shadow-lg p-8">
                                    <div class="text-left">
                                        <i class="fas fa-quote-left text-4xl text-gray-600 mb-4"></i>
                                    </div>                                    
                                    <p class="mb-4 text-lg font-normal text-gray-600">"Nuansa kafe yang berbeda dan nyaman di Tasikmalaya, wajib coba"</p>
                                    <div class="flex items-center">
                                        <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('img/testimonies/kakang.png')}}" alt="profile">
                                        <p class="text-lg font-semibold text-gray-800">- Kakang Millo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="bg-white rounded-lg shadow-lg p-8">
                                    <div class="text-left">
                                        <i class="fas fa-quote-left text-4xl text-gray-600 mb-4"></i>
                                    </div>                                    
                                    <p class="mb-4 text-lg font-normal text-gray-600">"enak makannya suasana nyaman bt ngobrol..."</p>
                                    <div class="flex items-center">
                                        <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('img/testimonies/isye.png')}}" alt="profile">
                                        <p class="text-lg font-semibold text-gray-800">- Isye Sopiana Natamihardja</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLIDE 4 -->
                    <div class="swiper-slide">
                        <div class="flex flex-wrap justify-center items-center">
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="bg-white rounded-lg shadow-lg p-8">
                                    <div class="text-left">
                                        <i class="fas fa-quote-left text-4xl text-gray-600 mb-4"></i>
                                    </div>                                    
                                    <p class="mb-4 text-lg font-normal text-gray-600">"enak tempatnya buat nongky"</p>
                                    <div class="flex items-center">
                                        <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('img/testimonies/herry.png')}}" alt="profile">
                                        <p class="text-lg font-semibold text-gray-800">- Herry Suryana</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-8">
                                <div class="bg-white rounded-lg shadow-lg p-8">
                                    <div class="text-left">
                                        <i class="fas fa-quote-left text-4xl text-gray-600 mb-4"></i>
                                    </div>                                    
                                    <p class="mb-4 text-lg font-normal text-gray-600">"Rasanya endos gandos semua, dan harganya pastinya terjangkau oleh semua"</p>
                                    <div class="flex items-center">
                                        <img class="w-16 h-16 rounded-full mr-4" src="{{ asset('img/testimonies/lita.png')}}" alt="profile">
                                        <p class="text-lg font-semibold text-gray-800">- Lita Kusmayadi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more swiper-slide divs for more slides below this line-->
                </div>
                <!-- Dot Pagination -->
                <div class="swiper-pagination pb-10"></div>
            </div>
        </section>
        @include('layouts.footer')

        <script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
    </body>
</html>

