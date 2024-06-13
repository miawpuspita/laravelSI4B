<?php

namespace App\Policies;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MahasiswaPolicy
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
    public function view(User $user, Mahasiswa $mahasiswa): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //n role A dan D dizinkan untuk membuat data mahasiswa
        return in_array($user->role, ['A', 'D']);
        //return in_array($user->role,['A','D']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function update (User $user, Mahasiswa $mahasiswa): bool
    {
        return $user->role =='A';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Mahasiswa $mahasiswa): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Mahasiswa $mahasiswa): bool
    {
        //
    }
}
