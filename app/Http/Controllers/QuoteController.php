<?php

namespace App\Http\Controllers;

// Import Class Requst
use App\Http\Requests\QuoteRequest;

// Import DB Quote
use App\Models\Quote;


class QuoteController extends Controller
{
    
    public function index()
    {
        $quotes = Quote::orderBy('id', 'desc')->get();

        return view('dashboard.quotes', compact('quotes'));
    }

    
    public function create()
    {
        return view('dashboardCreate.quotes_create');
    }

    public function store(QuoteRequest $request)
    {
        $data = $request->all();

        $request->user()->quotes()->create($data);

        return redirect('/quote')->with('msg', 'Quote Berhasil ditambahkan');
    }


    public function show($id)
    {
        return abort('404');
    }
   
    
    public function edit($id)
    {
        $quote = Quote::findOrFail($id);

        return view('dashboardEdit.quotes_edit', compact('quote'));
    }


    public function update(QuoteRequest $request, $id)
    {
        $data = $request->all();

        Quote::findOrFail($id)->update($data);

        return redirect('/quote')->with('msg', 'Quote Berhasil diedit');
    }


    public function destroy($id)
    {
        Quote::destroy($id);

        return redirect('/quote')->with('msg', 'Quote Berhasil dihapus !');

    }
}
