<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Db About
use App\Models\About;

class TentangController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('pages.tentang', compact('about'));
    }
}
