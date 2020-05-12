<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Facades Hash
use Illuminate\Support\Facades\Hash;

// Import DB User
use App\Models\User;



class AdminController extends Controller
{
    // READ
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();

        return view('dashboard.admin', compact('users'));
    }

    // CREATE URL
    public function create()
    {
        return view('dashboardCreate.admin_create');
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);

        $password = Hash::make($request->password);

        if (User::count() >= 2) {
            return redirect('/admin')->with('msg', 'Tidak bisa lebih dari 2');
        }

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $password
        ]);

        return redirect('/admin')->with('msg', 'Admin berhasil ditambahkan !');
    }

    //
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('dashboardEdit.admin_edit', compact('user'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8']
        ]);

        $password = Hash::make($request->password);

        User::findOrFail($id)->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $password
        ]);

        return redirect('/admin')->with('msg', 'Admin berhasil diedit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/admin')->with('msg', 'Admin berhasil dihapus !');
    }
}
