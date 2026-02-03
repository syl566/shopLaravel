<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home() {
     $product = [
        'name' => 'T-shirt Laravel',
        'price' => 29.99,
        'description' => 'Un super t-shirt',
        'stock' => 0

    ];
     return view('greeting', compact('product'));
    
    }

    public function about()
    {
        return 'A propos de nous';
    }
}
