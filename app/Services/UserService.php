<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        return User::all();
    }
    public function getUserById($id)
    {
        return User::find($id);
    }
    //after this bind the service class in the service continer using the AppServiceProvider
}
