<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAddressPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //判断有没有新增、修改、删除收货地址的权限
    public function own(User $user, UserAddress $address)
    {
        return $address->user_id == $user->id;
    }
}
