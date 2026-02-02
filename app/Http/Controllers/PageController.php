<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return 'Bienvenue à la maison!';
    }

    public function about()
    {
        return 'A propos de nous';
    }
}
