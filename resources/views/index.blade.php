<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <!-- Avec index -->
    @foreach ($articles as $article)
    <h2>{{ $article['id'] }}</h2>
    <p>{{ $article['name'] }}</p>
    <p>{{ $article['price'] }} €</p>
    @endforeach

    <!----@forelse($articles as $article)
       <p>{{ $article['name'] }}</p>
    @empty
    <p>Aucun produit trouvé.</p>
@endforelse-->
   
</body>

</html>