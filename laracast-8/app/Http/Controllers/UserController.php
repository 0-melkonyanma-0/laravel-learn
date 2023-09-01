<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = User::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $author)
    {
        $posts = $author->posts;
        return view('posts.index', compact('posts'));
    }
}
