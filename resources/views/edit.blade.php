<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg w-full max-w-2xl">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Product</h2>
        <form method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Product Title -->
            <div>
                <label for="title" class="block text-gray-700">Product Title</label>
                <input type="text" name="title" id="title" value="{{ $product->name }}" required class="border rounded p-2 w-full">
            </div>

            <!-- Image Upload -->
            <div class="mt-4">
                <label for="image" class="block text-gray-700">Product Image</label>
                <input type="file" name="image" id="image" accept="image/*" class="border rounded p-2 w-full">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover rounded-md shadow-sm border border-gray-200 mt-2">
                @endif
            </div>

            <!-- Categories -->
            <div class="mt-4">
                <label for="categories" class="block text-gray-700">Select Categories</label>
                @foreach($categories as $category)
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}" {{ $product->categories->contains($category->id) ? 'checked' : '' }} class="form-checkbox">
                        <span class="ml-2">{{ $category->name }}</span>
                    </label>
                @endforeach
            </div>

            <!-- Features -->
            <div class="mt-4">
                <label for="features" class="block text-gray-700">Product Features</label>
                <div id="featureList">
                    @foreach($product->features as $feature)
                        <input type="text" name="features[]" value="{{ $feature->description }}" class="border rounded p-2 w-full mt-2" placeholder="Feature">
                    @endforeach
                    <input type="text" name="features[]" class="border rounded p-2 w-full mt-2" placeholder="Feature">
                </div>
                <button type="button" id="addFeature" class="mt-2 p-2 bg-blue-500 text-white rounded">Add More</button>
            </div>

            <!-- Submit -->
            <div class="mt-6">
                <button type="submit" class="bg-green-500 text-white rounded p-2">Update Product</button>
                <a href="{{route('product.showall')}}" class="bg-red-500 text-white rounded p-2">Cancel</a>
            </div>
            
        </form>
    </div>

    <script>
        // Add More Features Function
        document.getElementById('addFeature').addEventListener('click', function() {
            let featureList = document.getElementById('featureList');
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'features[]';
            input.className = 'border rounded p-2 w-full mt-2';
            input.placeholder = 'Feature';
            featureList.appendChild(input);
        });
    </script>
</body>

</html>
