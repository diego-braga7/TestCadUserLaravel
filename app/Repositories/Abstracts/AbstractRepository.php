<?php

namespace App\Repositories\Abstracts;

use App\Repositories\Contracts\InterfaceRepository;

abstract class AbstractRepository implements InterfaceRepository
{
    protected $model;

    abstract public function save(array $data): mixed;

    abstract public function findOne(int $id): mixed;

    abstract public function findAll(): array;

    abstract public function delete(int $id): bool;

    abstract public function update(array $data, $id): mixed;
}
