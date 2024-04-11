<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function save() {
        return view('register.index', [
            'title' => 'Register',
            'header' => 'Register',
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:5', 'max:50']
        ]);

        User::create($validated);
        // $request->session()->flash('success', 'Register berhasil!!');
        return redirect('/login')->with('success', 'Register berhasil!!');
    }
}
