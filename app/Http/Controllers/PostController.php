<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()->latest('id')->paginate(9);
        return view('index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = Post::where('slug', '=', $slug.".")->first();

        return view('show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $posts)
    {
        //
    }
}
