<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = PostModel::all();
        return view('posts.PostList',["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.PostCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = $request->file('image')->store('images','public');
        $post = new PostModel;
        $post -> title = $request -> title;
        $post -> content = $request -> content;
        $post -> image = $imagePath;
        $post -> save();
        return redirect('/post/list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = PostModel::find($id);
        return view('posts.PostDetail',["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = PostModel::find($id);
        return view('posts.PostUpdate',["post"=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = PostModel::find($id);
        $post -> title = $request -> title;
        $post -> content = $request -> content;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }
        $post->save();
        return redirect('/post/detail/'.$id);
        
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $post = PostModel::find($id);
        $post -> delete();
        return redirect('/post/list');
    }
}
