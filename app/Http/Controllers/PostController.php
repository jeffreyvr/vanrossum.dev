<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Spatie\Tags\Tag;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::published()->paginate(9);

        return view('posts.index', ['posts' => $posts]);
    }

    public function tagged($tag_slug): View
    {
        $locale = app()->getLocale();

        $tag = Tag::where("slug->{$locale}", $tag_slug)->firstOrFail();

        if (! $tag) {
            abort(404);
        }

        if (auth()->check()) {
            $posts = Post::withTagSlug($tag_slug);
        } else {
            $posts = Post::withTagSlug($tag_slug)->published();
        }

        return view('posts.index', ['tag' => $tag, 'posts' => $posts->orderby('publish_date', 'desc')->paginate(9)]);
    }

    public function show(Post $post): View
    {
        $this->authorize('view', $post);

        return view('posts.show')->with(['post' => $post]);
    }

    public function create(): View
    {
        $this->authorize('create', Post::class);

        return view('posts.create');
    }

    public function store(): RedirectResponse
    {
        $this->authorize('create', Post::class);

        $attributes = request()->validate([
            'title' => 'required',
            'text' => 'required',
            'status' => ['required', 'in:draft,publish'],
            'publish_date' => 'nullable',
            'tweet_url' => 'nullable|url',
        ]);

        $attributes['author_id'] = auth()->id();

        $post = Post::create($attributes);

        $post->syncTags(array_map('trim', explode(',', request('tags'))));

        return redirect()->route('posts.show', $post->idSlug());
    }

    public function edit($id): View
    {
        $post = Post::findOrFail($id);

        $this->authorize('update', $post);

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post): RedirectResponse
    {
        $attributes = request()->validate([
            'title' => 'required',
            'text' => 'required',
            'status' => ['required', 'in:draft,publish'],
            'publish_date' => 'nullable',
            'tweet_url' => 'nullable|url',
        ]);

        $this->authorize('update', $post);

        $post->update($attributes);

        $post->syncTags(array_map('trim', explode(',', request('tags'))));

        return redirect()->back();
    }

    public function destroy($id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        $this->authorize('update', $post);

        $post->delete();

        return redirect()->route('posts');
    }
}
