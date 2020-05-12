<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Db Artikel
use App\Models\Artikel;


class HomeController extends Controller
{
    public function index()
    {
        $single   = Artikel::with('user')->inRandomOrder()->first();
        $reads    = Artikel::with('user')->orderBy('id', 'desc')->paginate(4);
        $artikels = Artikel::with('user')->inRandomOrder()->paginate(3);


        return view('pages.home', compact('reads', 'artikels', 'single'));
    }

}
