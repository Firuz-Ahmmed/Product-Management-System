<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
       
        <div class="mt-6">
            <a href="{{route('product.showall')}}"><button type="submit"  class="w-full bg-green-500 hover:bg-green-600 text-white rounded-lg p-3 font-semibold">See All Products</button></a>
        </div>
        <h2 class="text-2xl font-bold mb-6 text-center mt-4 text-gray-700">Add New Product</h2>
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Product Title -->
            <div class="mb-4 mt-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Product Title</label>
                <input type="text" name="title" id="title" required class="border border-gray-300 rounded-lg p-3 w-full focus:ring focus:ring-indigo-300">
            </div>

            <!-- Image Upload and Preview -->
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Product Image</label>
                <input type="file" name="image" id="image" accept="image/*" class="border border-gray-300 rounded-lg p-3 w-full focus:ring focus:ring-indigo-300" required>
                <div class="mt-2 flex justify-center">
                    <img id="imagePreview" class="mt-2 max-w-xs rounded-md shadow-md border border-gray-200" alt="Image Preview">
                </div>
            </div>

            <!-- Category Select -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Select Categories</label>
                <div class="grid grid-cols-2 gap-4">
                    @foreach($categories as $category)
                        <div class="flex items-center">
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" id="category_{{ $category->id }}" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="category_{{ $category->id }}" class="ml-2 block text-sm text-gray-700">{{ $category->name }}</label>
                            
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Add More Features -->
            <div class="mb-4">
                <label for="features" class="block text-gray-700 font-medium mb-2">Product Features</label>
                <div id="featureList" class="space-y-2">
                    <input type="text" name="features[]" class="border border-gray-300 rounded-lg p-3 w-full focus:ring focus:ring-indigo-300" placeholder="Feature">
                </div>
                <button type="button" id="addFeature" class="mt-2 p-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg w-full">+ Add More Features</button>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white rounded-lg p-3 font-semibold">Save Product</button>
            </div>
        </form>
    </div>

    <script>
        // Image Preview Functionality
        document.getElementById('image').addEventListener('change', function(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let output = document.getElementById('imagePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });

        // Add More Features Function
        document.getElementById('addFeature').addEventListener('click', function() {
            //event.preventDefault();
            let featureList = document.getElementById('featureList');
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'features[]';
            input.className = 'border border-gray-300 rounded-lg p-3 w-full focus:ring focus:ring-indigo-300';
            input.placeholder = 'Feature';
            featureList.appendChild(input);
        });
    </script>
</body>
</html>
