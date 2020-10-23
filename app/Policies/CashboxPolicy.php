<?php

namespace App\Policies;

use App\Models\Cashbox;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CashboxPolicy
{
    use HandlesAuthorization;


    public function before(User $user)
    {
        if ($user->role == 'admin'){
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cashbox  $cashbox
     * @return mixed
     */
    public function view(User $user, Cashbox $cashbox)
    {
        return $cashbox->id == 2;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cashbox  $cashbox
     * @return mixed
     */
    public function update(User $user, Cashbox $cashbox)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cashbox  $cashbox
     * @return mixed
     */
    public function delete(User $user, Cashbox $cashbox)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cashbox  $cashbox
     * @return mixed
     */
    public function restore(User $user, Cashbox $cashbox)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cashbox  $cashbox
     * @return mixed
     */
    public function forceDelete(User $user, Cashbox $cashbox)
    {
        //
    }

    public function test(?User $user)
    {
        return true;
    }
}
