<?php

namespace App\Policies;

use App\Models\Quater;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class QuaterPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Quater $quater): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role_id == 1;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Quater $quater): bool
    {
        return $user->role_id == 1;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Quater $quater): bool
    {
        return $user->role_id == 1;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Quater $quater): bool
    {
        return $user->role_id == 1;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Quater $quater): bool
    {
        return $user->role_id == 1;
    }
}
