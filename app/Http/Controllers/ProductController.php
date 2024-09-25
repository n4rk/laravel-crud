<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display list of products in the welcome page.
     */
    public function welcome() {
        $products = Product::all();
        // order by price descendently, and take ony first 8 products
        $products = Product::orderBy('price', 'desc')->take(8)->get();
        return view('welcome', compact('products'));
    }

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {

    //     $products = Product::all();
    //     $products = Product::paginate(5);
    //     return view('products.index', compact('products'));
    // }
    public function index(Request $request)
{
    $keyword = $request->query('keyword', '');

    $products = Product::when($keyword, function ($query, $keyword) {
            return $query->where('name', 'like', '%' . $keyword . '%')
                         ->orWhere('description', 'like', '%' . $keyword . '%');
        })
        ->paginate(5)
        ->appends(['keyword' => $keyword]);

    return view('products.index', compact('products', 'keyword'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for image
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath; // Save the path to the database
        }

        Product::create($validatedData);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate only if the image is provided
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath; // Update the path in the database
        }

        $product->update($validatedData);

        return redirect()->route('products.index');
    }

    // public function search(Request $request) {
    //     $keyword = $request->query('keyword');

    //     if (empty($keyword)) {
    //         return redirect()->route('products.index')->with('error', 'Please enter a search term.');
    //     }

    //     $products = Product::where('name', 'like', '%'.$keyword.'%')
    //                         ->orWhere('description', 'like', '%'.$keyword.'%')
    //                         ->paginate(3)
    //                         ->appends(['search' => $keyword]);

    //     if ($products->isEmpty()) {
    //         return view('products.index', compact('products'))->with('message', 'No products found for the search keyword.');
    //     }
    //     return view('products.index', compact('products'));
    // }
    public function search(Request $request)
    {
        $keyword = $request->query('keyword');

        if (empty($keyword)) {
            return redirect()->route('products.index')->with('error', 'Please enter a search term.');
        }

        $products = Product::where('name', 'like', '%'.$keyword.'%')
                            ->orWhere('description', 'like', '%'.$keyword.'%')
                            ->paginate(5)
                            ->appends(['keyword' => $keyword]);

        if ($products->isEmpty()) {
            return view('products.index', compact('products', 'keyword'))->with('message', 'No products found for the search keyword.');
        }

        return view('products.index', compact('products', 'keyword'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

}
