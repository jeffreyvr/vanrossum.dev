<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::paginate(9)]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'text' => 'required',
            'status' => ['required', 'in:draft,publish']
        ]);

        $post = new Post();
        $post->title = request('title');
        $post->text = request('text');
        $post->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        return;
    }

    public function update()
    {
        return;
    }

    public function destroy()
    {
        return;
    }
}
