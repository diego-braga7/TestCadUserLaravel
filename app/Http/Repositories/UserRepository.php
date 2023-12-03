<?php

namespace App\Http\Repositories;

use AbstractRepository;
use App\Http\Repositories\Abstracts\AbstractRepository as AbstractsAbstractRepository;
use App\Http\Repositories\Contracts\InterfaceRepository as ContractsInterfaceRepository;
use App\Models\User;
use InterfaceRepository;

class UserRepository extends AbstractsAbstractRepository implements ContractsInterfaceRepository
{
    public function save(array $data): User
    {
        return User::create($data);
    }

    public function findOne(int $id): User
    {
        return User::findOrFail($id);
    }
}
