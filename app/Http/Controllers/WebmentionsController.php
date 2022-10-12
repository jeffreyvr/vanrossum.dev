<?php

namespace App\Http\Controllers;

use App\Post;
use App\Webmention;
use Illuminate\Support\Arr;

class WebmentionsController extends Controller
{
    protected $payload;

    protected function isValid()
    {
        if (! Arr::get($this->payload, 'secret')) {
            return false;
        }

        return Arr::get($this->payload, 'secret') === config('services.webmentions.webhook_secret');
    }

    protected function setPayload()
    {
        $this->payload = request();
    }

    protected function payloadHasBeenReceivedBefore()
    {
        $webmentionId = Arr::get($this->payload, 'post.wm-id');

        return Webmention::where('webmention_id', $webmentionId)->exists();
    }

    protected function getType()
    {
        $accepted_types = ['in-reply-to', 'like-of', 'repost-of'];
        $retrieved_type = Arr::get($this->payload, 'post.wm-property');

        if (! in_array($retrieved_type, $accepted_types)) {
            return;
        }

        return $retrieved_type;
    }

    protected function getPost()
    {
        $url = Arr::get($this->payload, 'target');

        if (! $url) {
            return null;
        }

        $postIdSlug = str_replace('/', '', parse_url($url)['path']);

        [$id] = explode('-', $postIdSlug);

        return Post::find($id);
    }

    public function handle()
    {
        $this->setPayload();
        $this->isValid();

        if ($this->payloadHasBeenReceivedBefore()) {
            return;
        }

        if (! $type = $this->getType()) {
            return;
        }

        if (! $post = $this->getPost()) {
            return;
        }

        Webmention::create([
            'post_id' => $post->id,
            'type' => $type,
            'webmention_id' => Arr::get($this->payload, 'post.wm-id'),
            'author_name' => Arr::get($this->payload, 'post.author.name'),
            'author_photo_url' => Arr::get($this->payload, 'post.author.photo'),
            'author_url' => Arr::get($this->payload, 'post.author.url'),
            'interaction_url' => Arr::get($this->payload, 'post.url'),
            'text' => Arr::get($this->payload, 'post.content.text'),
        ]);
    }
}
