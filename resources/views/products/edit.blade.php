<!-- resources/views/products/edit.blade.php -->
@extends('layouts.app')
@section('content')

<form action="{{ route('products.update', $product) }}" method="POST">
    <h1 class="text-2xl font-bold mb-6">Produit</h1>
    @csrf
    @method('PUT')
          <div class="mb-4">
        <label for="name" class="block font-medium mb-1">Nom</label>
        <!-- La valeur saisie est conservée en cas d'erreur -->
        <input type="text" name="name" id="name" value="{{ old('name',$product->name) }}"
               class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label for="slug" class="block font-medium mb-1">Slug</label>
        <!-- La valeur saisie est conservée en cas d'erreur -->
        <input type="text" name="slug" id="slug" value="{{old('slug',$product->slug) }}"
               class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block font-medium mb-1">description</label>
        <input type="text" name="description" id="description" value="{{old('description')}}"
               class="w-full border rounded px-3 py-2">
    </div>
    <div class="mb-4">
        <label for="price" class="block font-medium mb-1">Prix :</label>
        <input type="number" name="price" id="price" value="{{ old('price',$product->price)}}"
               class="w-full border rounded px-3 py-2" required>
    </div>
    <div class="mb-4">
        <label for="stock" class="block font-medium mb-1">Stock :</label>
        <input type="number" name="stock" id="stock" value="{{ old('stock',$product->stock)}}"
               class="w-full border rounded px-3 py-2" required>
    </div>
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Mettre à jour</button>
</form>
<form action="{{ route('products.destroy', $product) }}" method="POST"
      onsubmit="return confirm('Êtes-vous sûr ?')">
    @csrf
    @method('DELETE')

    <br>
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">supprimer</button>
</form>

@endsection
