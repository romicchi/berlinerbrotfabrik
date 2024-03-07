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
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body style="padding: 0; margin: 0;">
    @include('layouts.navbar')
   <!-- Best Seller Carousel -->
   <div class="container-fluid position-relative">
    <div class="row align-items-center">
        <!-- Image -->
    <div class="col-md-6 p-0" style="width: 500px; height: 500px; overflow: hidden;">
        @foreach ($items as $key => $item)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img id="carouselImage" class="img-fluid w-100 h-100" src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" style="object-fit: cover;">
        </div>
        @endforeach
    </div>
    <!-- Description Box -->
    <div class="col-md-6" style="background-color: #789461; width: 500px; height: 500px; overflow: auto;">
        <img class="best-seller-logo" src="{{ asset('img/best seller logo.png') }}" alt="Best Seller Logo">
        <h2 id="carouselTitle" class="item-name">{{ $items->first()->name }}</h2>
        <hr class="item-line" style="border: none; border-top: 3px solid #45474B; width: 80%; margin: 1rem auto;">
        <p id="carouselDescription" class="item-description" style="color: #DBE7C9; font-size: 20px; padding-left: 2rem; max-width: 80%; margin: 0 auto;">{{ $items->first()->description }}</p>
    </div>
</div>
    <!-- Next Button -->
    <div class="position-absolute w-100 d-flex justify-content-center" style="top: 50%; right:0%;">
        <button class="next-button" onclick="nextSlide()">Next</button>
    </div>
</div>
    @include('layouts.footer')
</body>


<script>
let items = @json($items);
let currentIndex = 0;

function nextSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    document.getElementById('carouselImage').src = '/images/' + items[currentIndex].image;
    document.getElementById('carouselTitle').innerText = items[currentIndex].name;
    document.getElementById('carouselDescription').innerText = items[currentIndex].description;
}
</script>
</html>