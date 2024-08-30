<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg w-full max-w-6xl">
        <a href="{{route('product.create')}}"><button class="bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-500 transition-colors duration-200">Add New Product</button></a>
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Product List</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-3 px-6 text-left text-gray-700 text-sm font-medium uppercase">Title</th>
                        <th class="py-3 px-6 text-left text-gray-700 text-sm font-medium uppercase">Image</th>
                        <th class="py-3 px-6 text-left text-gray-700 text-sm font-medium uppercase">Categories</th>
                        <th class="py-3 px-6 text-left text-gray-700 text-sm font-medium uppercase">Features</th>
                        <th class="py-3 px-6 text-left text-gray-700 text-sm font-medium uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="border-b hover:bg-gray-100 transition-colors duration-200">
                        <td class="py-4 px-6 text-gray-700">{{ $product->name }}</td>
                        <td class="py-4 px-6">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-20 h-20 object-cover rounded-md shadow-sm border border-gray-200">
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex flex-wrap gap-2">
                                @foreach($product->categories as $category)
                                <span class="bg-indigo-200 text-indigo-800 px-3 py-1 rounded-full text-xs font-semibold">{{ $category->name }}</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <ul class="list-disc list-inside text-gray-600">
                                @foreach($product->features as $feature)
                                <li>{{ $feature->description }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="py-4 px-6 flex space-x-4">
                            <a href="{{ route('product.edit', $product->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-yellow-600 transition-colors duration-200">Edit</a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-red-600 transition-colors duration-200" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
