<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $articles = Products::all();
        return view('products.index', compact('articles'));
    }
    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('products.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'category_id' => 'required',
            'name'        => 'required|string|max:255',
            'slug'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'active'      => 'nullable|boolean',
        ]);
        Products::create([
            'category_id' => $request->category_id,
            'name' => $validated['name'],
            'slug' => $validated['slug'],
            'description' => $validated['description'] ?? null,
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'active' => $request->has('active'),
        ]);
        return redirect()->route('products.index')
        ->with('success', 'Produit créé avec succès !');

    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(string $id)
    {
        $product = Products::findOrFail($id);
        return view('Products',['id' => $id, 'articles' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
