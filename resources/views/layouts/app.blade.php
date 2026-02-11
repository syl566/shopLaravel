<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ShopLaravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-5">
        <nav class="container mx-auto">
            <a href="{{ route('home') }}" class="font-bold text-xl">ShopLaravel</a>
            <a href="{{ route('products.index') }}" class="ml-4">Produits</a>
            <a href="{{ route('about') }}" class="ml-4">À propos</a>
            <a href="{{ route('contact') }}" class="ml-4">Contact</a>

        </nav>
    </header>
    @section('title', 'Accueil - ShopLaravel')

    @section('content')
    <h1 class="text-3xl font-bold mb-4">Bienvenue sur ShopLaravel</h1>
    <p>Découvrez nos produits exceptionnels !</p>
    @endsection
    <main class="container mx-auto py-8">
        @yield('content')
    </main>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <footer class="bg-gray-800 text-white p-6 mt-10">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} ShopLaravel - Tous droits réservés
        </div>
    </footer>
</body>

</html>
