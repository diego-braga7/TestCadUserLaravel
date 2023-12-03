<?php

namespace App\Repositories;

use App\Repositories\Abstracts\AbstractRepository as AbstractsAbstractRepository;
use App\Models\User;

class UserRepository extends AbstractsAbstractRepository
{
    public function save(array $data): User
    {
        return User::create($data);
    }

    public function findOne(int $id): User
    {
        return User::findOrFail($id);
    }

    public function findAll(): array
    {
        return User::all()->toArray();
    }

    public function delete(int $id): bool
    {
        return User::destroy($id);
    }

    public function update(array $data, $id): User
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }
}
