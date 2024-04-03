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
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="{{ asset('css/menupage.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    </head>
    <body>
    @include('layouts.navbar')
    <!-- SUB-HEADER -->
    <header class="bg-center bg-no-repeat bg-cover py-1 py-lg-3 bg-gray-200 bg-blend-multiply" style="background-image: url('/img/sub-header.png');" loading="lazy">
        <div class="mx-4 max-w-screen-xl text-center text-lg-left">
            <p class="text-lg text-lg-lg font-weight-normal text-gray-200 tracking-widest" style="margin-bottom: 0px;">
            <a class="a-link" href="{{ url('/Welcome') }}">Home</a> / {!! __('messages.Menu')!!}</p>
        </div>
    </header>

    <div class="relative flex flex-col sm:flex-row items-stretch h-[500px]">
        <!-- Image -->
        <div class="col-md-6 p-0" style="width: 100%; height: 500px; overflow: hidden;">
            @foreach ($bestSellerItems as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="height: 100%;">
                <img id="carouselImage" class="img-fluid w-100 h-100" src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" style="object-fit: cover; object-position: center;">
            </div>
            @endforeach
        </div>
        <!-- Description Box -->
        <div class="col-md-6" style="background-color: #789461; width: 100%; height: 500px; overflow: auto;">
            <img class="img-fluid" src="{{ asset('img/best seller logo.png') }}" alt="Best Seller Logo" style="width: 150px; height: auto;">            
            <h2 id="carouselTitle" class="item-name">{{ $bestSellerItems->first() ? $bestSellerItems->first()->name : 'Empty' }}</h2>
            <hr class="item-line" style="border: none; border-top: 3px solid #45474B; width: 80%; margin: 1rem auto;">
            <p id="carouselDescription" class="item-description" style="color: #DBE7C9; font-size: 20px; padding-left: 2rem; max-width: 80%; margin: 0 auto;">{{ $bestSellerItems->first() ? $bestSellerItems->first()->description : 'Empty' }}</p>
        </div>
        <!-- Next Button -->
        <div class="position-absolute w-100 d-flex justify-content-center" style="top: 50%; right:0%;">
            <button class="next-button" onclick="nextSlide()">Next</button>
        </div>
    </div>

    <!-- Menu Header -->
    <div class="container mt-5">
        <h2 class="text-center">Menu</h2>
            <hr class="item-line" style="border: none; border-top: 3px solid #45474B; width: 35%; margin: 1rem auto;">

    <!-- Regular Items -->
        <div id="regularItemsCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="regularItemsContainer">
                <!-- Regular items will be loaded here -->
        </div>

        <!-- Next and previous buttons -->
            <a class="carousel-control-prev" href="#regularItemsCarousel" role="button" data-slide="prev" style="width: auto; background: rgba(211, 211, 211, 0.8); left: 0;" onclick="previousRegularSlide()">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#regularItemsCarousel" role="button" data-slide="next" style="width: auto; background: rgba(211, 211, 211, 0.8); right: 0;" onclick="nextRegularSlide()">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
<div class="mt-4">
@include('layouts.footer')
</div>

</body>

<script>
    let regularItems = @json($regularItems);
    let regularIndex = 0;

        window.onload = function() {
            loadRegularItems();
            nextRegularSlide();
}

    function loadRegularItems() {
        // Sort the regularItems array by the name property using a natural sort algorithm
        regularItems.sort(function(a, b) {
            return a.name.localeCompare(b.name, undefined, { numeric: true, sensitivity: 'base' });
        });
    
        let regularItemsContainer = document.getElementById('regularItemsContainer');
        regularItems.forEach((item, index) => {
            let div = document.createElement('div');
            div.className = 'carousel-item' + (index === 0 ? ' active' : '');
            div.innerHTML = `
                <img src="/images/${item.image}" class="d-block w-100" alt="${item.name}">
            `;
            regularItemsContainer.appendChild(div);
        });
}

    loadRegularItems();
    nextRegularSlide();

    function nextRegularSlide() {
        regularIndex = (regularIndex + 1) % regularItems.length;
        updateRegularSlides();
}

    function previousRegularSlide() {
        regularIndex = (regularIndex - 1 + regularItems.length) % regularItems.length;
        updateRegularSlides();
}

    function updateRegularSlides() {
        let carouselItems = document.querySelectorAll('#regularItemsContainer .carousel-item');
        carouselItems.forEach((item, index) => {
            item.className = 'carousel-item' + (index === regularIndex ? ' active' : '');
        });
}

    let items = @json($bestSellerItems);
    let currentIndex = 0;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % items.length;
        document.getElementById('carouselImage').src = '/images/' + items[currentIndex].image;
        document.getElementById('carouselTitle').innerText = items[currentIndex].name;
        document.getElementById('carouselDescription').innerText = items[currentIndex].description;
    }
</script>

</html>