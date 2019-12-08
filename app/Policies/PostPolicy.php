<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    
    public function create(User $user)
    {
        return $user->is_admin;
    }

    public function update(User $user, Post $post)
    {
        return $user->id === $post->author_id;
    }
}