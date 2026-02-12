@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-6">categories</h1>

    @foreach ($category->products as $product)
        <br><strong>{{$product->name}}</strong>
        <br> <em>{{$product->description}}</em>
        <br> Price: {{$product->price}} €
        <br> {{$product->stock}}
        <br>
    @endforeach

@endsection
