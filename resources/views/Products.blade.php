@extends('layouts.app')

@section('title', 'Produit - ShopLaravel')
@section('content')
    <h1 class="text-2xl font-bold mb-4">Produits</h1>

   <ul><br>
       <li>{{$articles->id}} <br> {{$articles->name}}
           <em>{{$articles->description}}</em>
          <br> Prix : {{$articles->price}}<br>En stock : {{$articles->stock}}
       </li>
   </ul>
@endsection
