<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $articles = Products::all();
        return view('index', compact('articles'));
    }
    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('Products',['id' => $id, 'articles' => $product]);
    }
}
