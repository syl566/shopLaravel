<!-- resources/views/products/edit.blade.php -->

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="name">Nom</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}">
    </div>

    <!-- Autres champs... -->

    <button type="submit">Mettre à jour</button>
</form>
