<?php

namespace App\Policies;

use App\Product;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function view(?User $user, Product $product): bool
    {
        if ($user && $user->is_admin) {
            return true;
        }

        return $product->status == 'publish';
    }

    public function create(User $user): bool
    {
        return $user->is_admin;
    }

    public function edit(User $user, Product $product)
    {
        return $user->is_admin;
    }

    public function update(User $user, Product $product): bool
    {
        return $user->is_admin;
    }
}
