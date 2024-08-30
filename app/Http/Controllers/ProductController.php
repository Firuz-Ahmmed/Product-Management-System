<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function create()
    {
        $categories = Category::all(); // Retrieve all categories for the form
        return view('create', compact('categories'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
        ]);
        $imagePath = $request->file('image')->store('products', 'public');
        $product = Product::create([
            'name' => $validatedData['title'],
            'image' => $imagePath,
            'user_id' => auth()->id() ?? 1,
        ]);
        //dd($validatedData['categories']);
       $product->categories()->sync($validatedData['categories']);
       //dd($validatedData['features']);
        if (!empty($validatedData['features'])) {
            foreach ($validatedData['features'] as $feature) {
                //dd($feature);
                $product->features()->create(['description' => $feature]);
            }
        }
        return redirect()->route('product.showall')->with('success', 'Product created successfully.');
    }

    public function showall()
    {
        $products = Product::all();
       // dd($products);
        return view('productsAll', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(); // Retrieve all categories for the form
        return view('edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }
        $product->name = $validatedData['title'];
        $product->save();
        $product->categories()->sync($validatedData['categories']);
        if (!empty($validatedData['features'])) {
            $product->features()->delete();
            foreach ($validatedData['features'] as $feature) {
                $product->features()->create(['description' => $feature]);
            }
        }
        return redirect()->route('product.showall')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.showall')->with('success', 'Product deleted successfully.');
    }
    
}
