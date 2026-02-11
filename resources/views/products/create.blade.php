<!-- resources/views/products/create.blade.php -->
@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-6">Nouveau produit</h1>
    <form action="{{ route('products.store') }}" method="POST" class="max-w-lg">
        @csrf

        <div class="mb-4">
            <label for="category_id" class="block font-medium mb-1">Categories</label>
            <select name="category_id" id="category_id"
                    class="w-full border rounded px-3 py-2" required>
                <option value="">-- Choisissez une catégorie --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="name" class="block font-medium mb-1">Nom</label>
            <!-- La valeur saisie est conservée en cas d'erreur -->
            <input type="text" name="name" id="name" value="{{old('name') }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="slug" class="block font-medium mb-1">Slug</label>
            <!-- La valeur saisie est conservée en cas d'erreur -->
            <input type="text" name="slug" id="slug" value="{{old('slug') }}"
                   class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block font-medium mb-1">description</label>
            <input type="text" name="description" id="description" value="{{old('description')}}"
                   class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
        <label for="price" class="block font-medium mb-1">Prix :</label>
        <input type="number" name="price" id="price" value="{{'price'}}"
               class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="stock" class="block font-medium mb-1">Stock :</label>
            <input type="number" name="stock" id="stock" value="{{'stock'}}"
                   class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
        <!-- Pour les checkbox -->
            <label for="active" class="block font-medium mb-1">Active</label>
            <input type="checkbox" name="active" value="1">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Créer le produit</button>
    </form>

@endsection
