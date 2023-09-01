<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'name' =>       ['required', 'min:6', 'max:255'],
            'username' =>   ['required', 'min:6', 'max:255', Rule::unique('users', 'username')],
            'password' =>   ['required', Password::defaults()],
            'email' =>      ['required', 'email', 'min:8', 'max:255', Rule::unique('users', 'email')],
        ]);

        //dd($request->all());
        $user = User::create($request);

        Auth::login($user);
        //session()->flash('success','Your account have been created.');

        return redirect('posts')->with('success','Your account have been created.');
    }
}
