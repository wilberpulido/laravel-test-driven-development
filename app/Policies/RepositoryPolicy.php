<?php

namespace App\Policies;

use App\Models\Repository;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RepositoryPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }
    public function pass(User $user,Repository $repository)
    {
        return $user->id == $repository->user_id;
    }
}
