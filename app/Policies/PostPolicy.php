<?php

namespace App\Policies;

use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function view(?User $user, Post $post): bool
    {
        return $post->status == 'publish' || ($user && $user->is_admin);
    }

    public function create(User $user): bool
    {
        return $user->is_admin;
    }

    public function update(User $user, Post $post): bool
    {
        return $user->is_admin && $user->id === $post->author_id;
    }
}
