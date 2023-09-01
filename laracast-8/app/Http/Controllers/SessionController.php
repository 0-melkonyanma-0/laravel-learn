<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!auth()->attempt($request->except(['_token']))) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could be verefied.',
            ]);
        }

        session()->regenerate();
        //section fixation
        return redirect('/')->with('success', 'Welcome Back!');

        //return back()
        //    ->withInput()
        //    ->withErrors([
        //        'email' => 'Your provided credentials could be verefied.',
        //    ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
