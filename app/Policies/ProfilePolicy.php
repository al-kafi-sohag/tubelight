<?php

namespace App\Policies;

use App\Models\User;
use App\Models\profile;
use Illuminate\Auth\Access\Response;

class ProfilePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, profile $profile): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, profile $profile): bool
    {
        return $user->id == $profile->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, profile $profile): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, profile $profile): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, profile $profile): bool
    {
        //
    }
}
