<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'id' => 1,
                'name' => 'Article 1',
                'price' => 20,
                'stock' => 0
            ],
            [
                'id' => 2,
                'name' => 'Article 2',
                'price' => 30,
                'stock'=> 10
            ],
            [
                'id' => 3,
                'name' => 'Article 3',
                'price' => 40,
                'stock' => 15
            ],
            [
                'id' => 4,
                'name' => 'Article 4',
                'price' => 50,
                'stock' => 20
            ],
            [
                'id' => 5,
                'name' => 'Article 5',
                'price' => 60,
                'stock'=> 2
            ]
        ];
        return view('index', compact('articles'));
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
