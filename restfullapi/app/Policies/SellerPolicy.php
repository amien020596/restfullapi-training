<?php

namespace App\Policies;

use App\User;
use App\Seller;
use App\Traits\AdminAccess;
use Illuminate\Auth\Access\HandlesAuthorization;

class SellerPolicy
{
    use HandlesAuthorization, AdminAccess;

    /**
     * Determine whether the user can view the seller.
     *
     * @param  \App\User  $user
     * @param  \App\Seller  $seller
     * @return mixed
     */
    public function view(User $user, Seller $seller)
    {
        return $user->id === $seller->id;
    }

    /**
     * Determine whether the user can sale something
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function sale(User $user, Seller $seller)
    {
        return $user->id === $seller->id;
    }

    /**
     * Determine whether the user can update the seller.
     *
     * @param  \App\User  $user
     * @param  \App\Seller  $seller
     * @return mixed
     */
    public function editProduct(User $user, Seller $seller)
    {
        return $user->id === $seller->id;
    }

    /**
     * Determine whether the user can delete a product.
     *
     * @param  \App\User  $user
     * @param  \App\Seller  $seller
     * @return mixed
     */
    public function deleteProduct(User $user, Seller $seller)
    {
        return $user->id === $seller->id;
    }
}
