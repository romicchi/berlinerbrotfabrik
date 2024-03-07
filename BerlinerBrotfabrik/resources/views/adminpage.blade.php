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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="{{ asset('css/adminpage.css') }}" rel="stylesheet">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
    </head>
<body class="bg-gray-100">
@include('layouts.navbar')

<!-- Add Menu Items -->

<div class="flex justify-center min-h-screen items-center">
    <div class="flex flex-col bg-white p-10 rounded shadow-xl w-1/3 mr-4">
       
                <h1 class="text-2xl font-bold mb-5">Add Menu Items</h1>
                <h2 class="text-xl mb-3">Add Item</h2>
                <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea id="description" name="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required></textarea>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category:</label>
                <select id="category" name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="bread/pastry">Bread/Pastry</option>
                    <option value="cake/dessert">Cake/Dessert</option>
                    <option value="drinks">Drinks</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type:</label>
                <select id="type" name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    <option value="Regular Item">Regular Item</option>
                    <option value="Best Seller">Best Seller</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700">Image:</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            </div>

            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add Item</button>
        </form>
    </div>

<!--Menu Display Grid-->

<div class="flex flex-col bg-white p-10 rounded shadow-xl w-2/3 h-full flex-grow">
    <h2 class="text-xl mb-3">Items</h2>
    <div style="height: 458px; overflow-y: auto;">
        <table class="table-auto divide-y divide-gray-200 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3 font-bold">Name</th>
                    <th class="px-6 py-3 font-bold">Description</th>
                    <th class="px-6 py-3 font-bold">Category</th>
                    <th class="px-6 py-3 font-bold">Type</th>
                    <th class="px-6 py-3 font-bold">Image</th>
                    <th class="px-6 py-3 font-bold">Action</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($items))
    @foreach($items as $item)
        <tr>
            <td class="px-6 py-4 text-sm text-gray-500">{{ $item->name }}</td>
            <td class="px-6 py-4 text-sm text-gray-500">{{ $item->description }}</td>
            <td class="px-6 py-4 text-sm text-gray-500">{{ $item->category }}</td>
            <td class="px-6 py-4 text-sm text-gray-500">{{ $item->type }}</td>
            <td class="px-6 py-4 text-sm text-gray-500">
                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" class="w-20 h-20 cursor-pointer imageModalOpener">
            </td>
            <td class="px-6 py-4 text-sm text-gray-500">
                <div class="flex flex-col items-center">
                    <button class="editButton text-indigo-600 hover:text-indigo-900 mb-2" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-description="{{ $item->description }}" data-category="{{ $item->category }}" data-type="{{ $item->type }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
    @endforeach
@endif
</tbody>
            </table>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div id="imageModal" class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-4 rounded relative">
        <img id="modalImage" src="" alt="Modal Image" style="max-width: 400px; max-height: 400px; object-fit: contain;" class="mx-auto">
    </div>
    <button id="closeImageModal" class="absolute top-0 right-0 m-2 transform translate-x-[20%] translate-y-[-20%] text-red-600 hover:text-red-900 text-4xl">
        <i class="fas fa-times"></i>
    </button>
</div>

<!-- Edit Modal -->

<div id="editModal" class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-4 rounded relative">
        <button id="closeButton" class="absolute top-0 right-0 m-2 transform translate-x-[-50%] translate-y-[-50%]">
            <i class="fas fa-times"></i>
        </button>
        <h2 class="text-xl mb-2">Edit Item</h2>
        
        <form id="editForm" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="editName">Name</label>
                <input id="editName" name="name" type="text" required>
            </div>

            <div>
                <label for="editDescription">Description</label>
                <input id="editDescription" name="description" type="text" required>
            </div>

            <div>
                <label for="editCategory">Category</label>
                <input id="editCategory" name="category" type="text" required>
            </div>

            <div>
                <label for="editType">Type</label>
                <input id="editType" name="type" type="text" required>
            </div>

            <!-- Add more fields as necessary -->

            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Save</button>
        </form>
    </div>
</div>

@include('layouts.footer')
</body>
    
<script>
    document.querySelectorAll('.editButton').forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('editForm').action = `/items/${button.dataset.id}`;
            document.getElementById('editName').value = button.dataset.name;
            document.getElementById('editDescription').value = button.dataset.description;
            document.getElementById('editCategory').value = button.dataset.category;
            document.getElementById('editType').value = button.dataset.type;

            // Set more fields as necessary

            document.getElementById('editModal').classList.remove('hidden');
        });
    });

    document.getElementById('closeButton').addEventListener('click', () => {
        document.getElementById('editModal').classList.add('hidden');
    });

    document.querySelectorAll('.imageModalOpener').forEach(image => {
        image.addEventListener('click', () => {
            document.getElementById('modalImage').src = image.src;
            document.getElementById('imageModal').classList.remove('hidden');
        });
    });

    document.getElementById('closeImageModal').addEventListener('click', () => {
        document.getElementById('imageModal').classList.add('hidden');
    });
</script>

</html>