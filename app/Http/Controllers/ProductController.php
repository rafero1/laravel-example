<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('home', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|string',
            'quantity' => 'required|numeric',
            'category' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->desc = $request->get('desc');
        $product->quantity = $request->get('quantity');
        $product->category_id = $request->get('category');
        $product->save();

        return redirect()->route('home')
            ->with('success','Produto criado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|string',
            'quantity' => 'required|numeric',
            'category' => 'required'
        ]);

        $product->name = $request->get('name');
        $product->desc = $request->get('desc');
        $product->quantity = $request->get('quantity');
        $product->category_id = $request->get('category');
        $product->save();

        return redirect()->route('home')
                ->with('success','Produto atualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('home')->with('success', 'Produto removido.');
    }
}
