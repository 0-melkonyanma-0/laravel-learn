<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::filter(request(['search', 'category', 'author']))
            ->paginate(8)
            ->withQueryString();

        return view('posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();

        return view('posts.create', compact(['categories', 'users']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->slug = Str::slug($request->tittle, '-');
        $post->user_id = User::where('name', $request->name)->get()[0]->id;
        $post->category_id = Category::where('tittle', $request->category)->get()[0]->id;
        $post->excerpt = substr($request->body, 0, 15) . '...';
        $post->tittle = $request->tittle;
        $post->body = $request->body;
        $post->save();

        return back(302);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts');
    }
}
