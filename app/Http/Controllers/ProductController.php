<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(9);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'image' => 'img/'.$imageName,
        ]);

        return redirect()
            ->route('product.index')
            ->with('message', 'New product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->category = $request->category;

        if (! empty($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img'), $imageName);
            $product->image = 'img/'.$imageName;
        }

        $product->save();

        return redirect()
            ->route('product.index')
            ->with('message', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()
            ->route('product.index')
            ->with('message', 'Product deleted successfully');
    }
}
