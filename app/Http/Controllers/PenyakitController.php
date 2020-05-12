<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Db 
use App\Models\Artikel;

class PenyakitController extends Controller
{
    public function index(Request $request)
    {
        $cari = urldecode($request->input('data'));

        if (!empty($cari )) {
            $artikels = Artikel::with('user')->where('title', 'like', '%' . $cari . '%')->paginate(1);

        } else $artikels = Artikel::with('user')->inRandomOrder()->paginate(5);

        return view('pages.penyakit', compact('artikels'));
    }

    public function show($title)
    {
        $artikel = Artikel::where('title', $title)->first();

        return view('pages.penyakit_show', compact('artikel'));
    }
}
