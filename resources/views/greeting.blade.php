<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopLaravel</title>
</head>

<body>
    <h1>ShopLaravel</h1>
    <p>Bienvenue sur Shoplaravel</p>
<div class =>
    <h2>{{ $product['name'] }}</h2>
    <p>Prix : {{ $product['price'] }} €</p>
    <p>{{ $product['description'] }}</p>
</div>
    @if($product['stock'] > 10)
    <span class="text-green-500">En stock</span>
    @elseif($product['stock']> 0)
    <span class="text-orange-500">Stock limité</span>
    @else
    <span class="text-red-500">Rupture de stock</span>
    @endif
    <div>
        <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    </div>

</body>

</html>