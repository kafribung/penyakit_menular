<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Db Quotes
use App\Models\Quote;


class MotivasiController extends Controller
{
    public function index()
    {
        $quotes = Quote::inRandomOrder()->get();

        return view('pages.motivasi', compact('quotes')); 
    }
}
