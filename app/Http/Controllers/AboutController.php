<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Class Requst
use App\Http\Requests\AboutRequest;

// Import DB Quote
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::orderBy('id', 'desc')->get();

        return view('dashboard.about', compact('abouts'));
    }

    
    public function create()
    {
        return view('dashboardCreate.about_create');
    }

   
    public function store(AboutRequest $request)
    {
        $data = $request->all();

        if (About::count() >= 1) {
            return redirect('/about')->with('msg', 'About Max 1');
        }

        $request->user()->abouts()->create($data);

        return redirect('/about')->with('msg', 'About Berhasil ditambahkan');

    }

    
    public function show($id)
    {
        return abort('404');
    }


    public function edit($id)
    {
        $about = About::findOrFail($id);

        return view('dashboardEdit.about_edit', compact('about'));
    }

    
    public function update(AboutRequest $request, $id)
    {
        $data = $request->all();

        About::findOrFail($id)->update($data);

        return redirect('/about')->with('msg', 'About berhasil diedit');
    }

    public function destroy($id)
    {
        About::destroy($id);

        return redirect('/about')->with('msg', 'About berhasil dihapus !');
    }
}
