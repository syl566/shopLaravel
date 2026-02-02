<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Ajoute une méthode
    public function show($id)
    {
        return "Affichage du produit $id";
    }
}
