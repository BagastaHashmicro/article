<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', ['title' => 'Register', 'active' => 'register']);

    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255', 'unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Account Successfully Created! Please Login');
        return redirect('/login')->with('success', 'Account Successfully Created! Please Login');
    }
}
