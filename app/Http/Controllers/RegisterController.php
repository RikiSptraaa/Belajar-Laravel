<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Daftar"
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => 'required|min:5|max:255'
        ]);
        $request->validate([
            'ConfirmPassword' => 'required_with:password|same:password|min:5'
        ]);
        $validated['password'] = Hash::make($validated['password']);


        User::create($validated);

        return redirect('/login')->with('status', 'Registrasi Berhasil');
    }
}
