<?php

namespace App\Http\Controllers;

use App\Post;
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
}
