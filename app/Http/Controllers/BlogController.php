<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DateTime;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()) {
            $posts = Post::all();
            return view('blog.index', ['posts' => $posts]);
        } else {
            return view('auth.login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'contenu' => ['required', 'string'],
        ]);

        // Création d'un nouveau post à partir des informations passées
        Post::create([
            'title' => $request->title,
            'contenu' => $request->contenu,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('blog')->with('success', 'Post créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // $posts = Post::all();
        /* TODO : LOGIQUE VERIFIANT LES ROLES */
        // $user = User::find(1);
        // $user->assignRole('admin'); 

        // if ($user->hasRole('admin')) {
        //     return view('blog.edit');
        // } 
        // else {
        //     return view('index.index');
        // }

        return view('blog.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Logique mise à jour post
        $post->update([
            'title' => $request->title,
            'contenu' => $request->contenu
        ]);

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Logique suppression post
        $post->delete();

        return redirect('/blog');
    }
}
