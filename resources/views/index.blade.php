@extends('layouts.app')

@section('title', 'Produit - ShopLaravel')
@section('content')
<h1 class="text-2xl font-bold mb-4">Nos produits</h1>

<div class="grid grid-cols-3 gap-4">
    @foreach ($articles as $article)
    <ul>
        <li>
            <h2>{{ $article['id'] }}</h2>
        </li>
        <li>
            <p>{{ $article['name'] }}</p>
        </li>
        <li>
            <p>{{ $article['price'] }} €</p>
        </li>
        @if($article['stock'] > 10)
        <li class="text-green-500">En stock</li>
        @elseif($article['stock']> 0)
        <li class="text-orange-500">Stock limité</li>
        @else
        <li class="text-red-500">Rupture de stock</li>
         @endif
    </ul>
    @endforeach
</div>
<!----@forelse($articles as $article)
       <p>{{ $article['name'] }}</p>
    @empty
    <p>Aucun produit trouvé.</p>
@endforelse-->
@endsection