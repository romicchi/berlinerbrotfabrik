@include('layouts.app')

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

<div class="flex flex-col md:flex-row justify-center min-h-screen ml-4 items-center">
    <div class="flex flex-col bg-white p-10 rounded shadow-xl w-full md:w-1/3 mr-4 mb-4 md:mb-0">
        
        <h1 class="text-2xl font-bold mb-5">Add Menu Items</h1>
        <h2 class="text-xl mb-3">Add Item</h2>
        <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full h-10 border-2 border-gray-300 px-2 rounded-md shadow-sm">
                @error('name')
                    <small _ngcontent-irw-c66 class="text-danger">* Name is required.</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea id="description" name="description" class="mt-1 block w-full h-12 border-2 border-gray-300 px-2 py-1 rounded-md shadow-sm"></textarea>
                @error('description')
                    <small _ngcontent-irw-c66 class="text-danger">* Description is required.</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700">Category:</label>
                <select id="category" name="category" class="mt-1 block w-full h-10 border-2 border-gray-300 rounded-md shadow-sm">
                    <option value="bread-pastry">Bread-Pastry</option>
                    <option value="cake-dessert">Cake-Dessert</option>
                    <option value="drinks">Drinks</option>
                </select>
                @error('category')
                    <small _ngcontent-irw-c66 class="text-danger">* Category is required.</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type:</label>
                <select id="type" name="type" class="mt-1 block w-full h-10 border-2 border-gray-300 rounded-md shadow-sm">
                    <option value="Regular Item">Regular Item</option>
                    <option value="Best Seller">Best Seller</option>
                </select>
                @error('type')
                    <small _ngcontent-irw-c66 class="text-danger">* Type is required.</small>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700">Image:</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full h-10 rounded-md shadow-sm">
                @error('image')
                    <small _ngcontent-irw-c66 class="text-danger">* Image is required.</small>
                @enderror
            </div>

            <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add Item</button>
        </form>
    </div>

<!--Menu Display Grid-->

<div class="flex flex-col bg-white p-10 rounded shadow-xl mr-4 w-full md:w-2/3 h-full flex-grow">
    <h2 class="text-xl mb-3">Items</h2>
    <div style="height: 458px;">
        <livewire:items-table/>
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
            <div class="mb-4">
                <label for="editName" class="block text-gray-700">Name:</label>
                <input type="text" id="editName" name="name" class="mt-1 block w-full h-10 border-2 border-gray-300 px-2 rounded-md shadow-sm">
            </div>

            <div class="mb-4">
                <label for="editDescription" class="block text-gray-700">Description:</label>
                <textarea id="editDescription" name="description" class="mt-1 block w-full h-12 border-2 border-gray-300 px-2 py-1 rounded-md shadow-sm"></textarea>
            </div>

            <div class="mb-4">
                <label for="editCategory" class="block text-gray-700">Category:</label>
                <select id="editCategory" name="category" class="mt-1 block w-full h-10 border-2 border-gray-300 rounded-md shadow-sm">
                    <option value="bread-pastry">Bread-Pastry</option>
                    <option value="cake-dessert">Cake-Dessert</option>
                    <option value="drinks">Drinks</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="editType" class="block text-gray-700">Type:</label>
                <select id="editType" name="type" class="mt-1 block w-full h-10 border-2 border-gray-300 rounded-md shadow-sm">
                    <option value="Regular Item">Regular Item</option>
                    <option value="Best Seller">Best Seller</option>
                </select>
            </div>

            <!-- Add more fields as necessary -->

            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Save</button>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteConfirmationModal" class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-4 rounded relative">
        <h2 class="text-xl mb-2">Confirm Delete</h2>
        <p>Are you sure you want to delete this item?</p>
        <div class="mt-4 flex justify-end">
            <button id="confirmDeleteButton" class="px-4 py-2 bg-red-500 text-white rounded mr-2">Yes, Delete</button>
            <button id="cancelDeleteButton" class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
        </div>
    </div>
</div>

<!-- Save Confirmation Modal -->
<div id="saveConfirmationModal" class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white p-4 rounded relative">
        <h2 class="text-xl mb-2">Confirm Save</h2>
        <p>Are you sure you want to save the changes?</p>
        <div class="mt-4 flex justify-end">
            <button id="confirmSaveButton" class="px-4 py-2 bg-green-500 text-white rounded mr-2">Yes, Save</button>
            <button id="cancelSaveButton" class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
        </div>
    </div>
</div>

@include('layouts.footer')
</body>
    
<script>
    // Listen for the editItem event dispatched from Livewire
    window.addEventListener('editItem', event => {
        const item = event.detail.item; // Fetch the item data from the event detail

        // Populate the modal fields with the item data
        document.getElementById('editForm').action = `/items/${item.id}`;
        document.getElementById('editName').value = item.name;
        document.getElementById('editDescription').value = item.description;
        document.getElementById('editCategory').value = item.category;
        document.getElementById('editType').value = item.type;

        // Show the modal
        document.getElementById('editModal').classList.remove('hidden');
    });

    document.getElementById('closeButton').addEventListener('click', () => {
        document.getElementById('editModal').classList.add('hidden');
    });

        // Listen for the submit event on the edit form
        document.getElementById('editForm').addEventListener('submit', (event) => {
        // Prevent the default form submission
        event.preventDefault();
        // Show the save confirmation modal
        document.getElementById('saveConfirmationModal').classList.remove('hidden');
    });

    // Handle click on the confirm save button
    document.getElementById('confirmSaveButton').addEventListener('click', () => {
        // Submit the form
        document.getElementById('editForm').submit();
        // Hide the save confirmation modal
        document.getElementById('saveConfirmationModal').classList.add('hidden');
    });

    // Handle click on the cancel save button
    document.getElementById('cancelSaveButton').addEventListener('click', () => {
        // Hide the save confirmation modal
        document.getElementById('saveConfirmationModal').classList.add('hidden');
    });

    // Image Modal
    document.querySelectorAll('.imageModalOpener').forEach(image => {
        image.addEventListener('click', () => {
            document.getElementById('modalImage').src = image.src;
            document.getElementById('imageModal').classList.remove('hidden');
        });
    });

    // Close Image Modal
    document.getElementById('closeImageModal').addEventListener('click', () => {
        document.getElementById('imageModal').classList.add('hidden');
    });

    // Delete Confirmation Modal
    window.addEventListener('showDeleteConfirmation', event => {
        const rowId = event.detail.rowId;
        // Show the confirmation modal
        document.getElementById('deleteConfirmationModal').classList.remove('hidden');
        // Handle delete confirmation
        document.getElementById('confirmDeleteButton').addEventListener('click', () => {
            // Dispatch event to delete item
            Livewire.dispatch('delete', { rowId: event.detail.rowId });

            // Hide the confirmation modal
            document.getElementById('deleteConfirmationModal').classList.add('hidden');
        });
        // Handle cancel delete
        document.getElementById('cancelDeleteButton').addEventListener('click', () => {
            // Hide the confirmation modal
            document.getElementById('deleteConfirmationModal').classList.add('hidden');
        });
    });
</script>

</html>