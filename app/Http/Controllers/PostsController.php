<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        if ( auth()->check() ) {
            $posts = Post::orderby('publish_date', 'desc')->paginate(9);
        } else {
            $posts = Post::published()->paginate(9);
        }

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);
        
        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        $this->authorize('create', Post::class);

        return view('posts.create');
    }

    public function store()
    {
        $this->authorize('create', Post::class);
        
        request()->validate([
            'title' => 'required',
            'text' => 'required',
            'status' => ['required', 'in:draft,publish']
        ]);

        $post = new Post();
        $post->title = request('title');
        $post->text = request('text');
        $post->author_id = auth()->user()->id;
        $post->publish_date = now();
        $post->status = request('status');
        $post->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        
        $this->authorize('update', $post);
        
        return view('posts.edit', ['post' => $post]);
    }

    public function update($post)
    {
        request()->validate([
            'title' => 'required',
            'text' => 'required',
            'status' => ['required', 'in:draft,publish']
        ]);

        $post = Post::findOrFail($post);

        $this->authorize('update', $post);

        $post->title = request('title');
        $post->text = request('text');
        $post->status = request('status');
        $post->save();

        return redirect()->back();
    }

    public function destroy()
    {
        $this->authorize('update', $post);

        return;
    }
}
