<?php

namespace App\Services\Api\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById(int $id): ?User
    {
        return User::find($id);
    }

    public function createUser(array $data): User
    {
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }

    public function updateUser(int $id, array $data): ?User
    {
        $user = User::find($id);

        if ($user) {
            if (isset($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            }
            $user->update($data);
        }

        return $user;
    }


    public function deleteUser(int $id): bool
    {
        return User::destroy($id) > 0;
    }
}
