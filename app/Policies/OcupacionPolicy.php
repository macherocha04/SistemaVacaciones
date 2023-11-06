<?php

namespace App\Policies;

use App\Models\Ocupacion;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OcupacionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    /*public function viewAny(User $user): bool
    {
        return $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ocupacion $ocupacion): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ocupacion $ocupacion): bool
    {
        return $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ocupacion $ocupacion): bool
    {
        return $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Ocupacion $ocupacion): bool
    {
        return $user->hasRole('Admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Ocupacion $ocupacion): bool
    {
        return $user->hasRole('Admin');
    }
}
