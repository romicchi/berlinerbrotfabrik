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
        @foreach ($bestSellerItems as $key => $item)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img id="carouselImage" class="img-fluid w-100 h-100" src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" style="object-fit: cover;">
        </div>
        @endforeach
    </div>
    <!-- Description Box -->
    <div class="col-md-6" style="background-color: #789461; width: 500px; height: 500px; overflow: auto;">
        <img class="best-seller-logo" src="{{ asset('img/best seller logo.png') }}" alt="Best Seller Logo">
        <h2 id="carouselTitle" class="item-name">{{ $bestSellerItems->first() ? $bestSellerItems->first()->name : 'Empty' }}</h2>
        <hr class="item-line" style="border: none; border-top: 3px solid #45474B; width: 80%; margin: 1rem auto;">
        <p id="carouselDescription" class="item-description" style="color: #DBE7C9; font-size: 20px; padding-left: 2rem; max-width: 80%; margin: 0 auto;">{{ $bestSellerItems->first() ? $bestSellerItems->first()->description : 'Empty' }}</p>
    </div>
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
<!-- Category Buttons -->
<div class="d-flex justify-content-center">
        <button class="btn btn-primary mx-2 category-button" onclick="getItemsByCategory('Bread-Pastry')">Bread/Pastry</button>
        <button class="btn btn-primary mx-2 category-button" onclick="getItemsByCategory('Cake-Dessert')">Cake/Dessert</button>
        <button class="btn btn-primary mx-2 category-button" onclick="getItemsByCategory('Drinks')">Drinks</button>
    </div>

    <!-- Regular Items -->
<div class="container mt-5">
    <div class="grid grid-cols-3 gap-4 justify-center" id="regularItemsContainer">
        <!-- Regular items will be loaded here -->
    </div>
</div>
</div>
<div class="mt-4">
@include('layouts.footer')
</div>

</body>

<script>
// Load the 'Bread-Pastry' items when the page loads
getItemsByCategory('Bread-Pastry');

function getItemsByCategory(category) {
    // Construct the URL and log it to the console
    let url = '{{ url('/') }}/menupage/' + category;
    console.log(url);

    // Send an AJAX request to the server
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(items => {
            // Sort items by name
            items.sort((a, b) => a.name.localeCompare(b.name));

            // Clear the items container
            let container = document.getElementById('regularItemsContainer');
            container.innerHTML = '';

            // Add each item to the container
            items.forEach(item => {
                let div = document.createElement('div');
                div.className = 'max-w-xs rounded overflow-hidden shadow-md bg-white';
                        
                // Add the item image, name, and description to the div
                div.innerHTML = `
                    <div class="w-full h-64 bg-cover bg-center" style="background-image: url('{{ asset('images/') }}/${item.image}');"></div>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">${item.name}</div>
                        <p class="text-gray-700 text-base">${item.description}</p>
                    </div>
                `;
                        
                // Add the div to the container
                container.appendChild(div);
            });

            // Calculate the number of items in the last row
            let itemsInLastRow = items.length % 3;

            // If the last row is not full, add empty gray cards
            if (itemsInLastRow > 0) {
                for (let i = itemsInLastRow; i < 3; i++) {
                    let div = document.createElement('div');
                    div.className = 'max-w-xs rounded overflow-hidden shadow-md bg-gray-200';
                    container.appendChild(div);
                }
            }
        })
        .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
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