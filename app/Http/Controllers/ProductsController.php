<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $articles = Products::all();
        return view('products.index', compact('articles'));
    }

    public function create()
    {
        $categories = Products::all();
        return view('products.create', compact('categories'));
        //
    }
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
            'active' => $request->has ('active'),
        ]);

        return redirect()->route('products.index')
        ->with('success', 'Produit créé avec succès !');
    }

    public function show(string $id)
    {
        $product = Products::findOrFail($id);
        return view('Products',['id' => $id, 'articles' => $product]);
    }

    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, products $product)
    {
        return redirect()->route('products.index')
        ->with('success', 'Produit mis à jour !');
    }

    public function destroy(Products $product)
    {
       $product->delete(); //On supprime les informations
        return redirect()->route('products.index')
            ->with('success', 'Produit supprimé avec succès !');
    }
}
