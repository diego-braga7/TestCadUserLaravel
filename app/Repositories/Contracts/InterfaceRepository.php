<?php

namespace App\Repositories\Contracts;

interface InterfaceRepository
{
    public function findAll(): array;
    public function findOne(int $id): mixed;
    public function save(array $data): mixed;
    public function update(array $data, $id): mixed;
    public function delete(int $id): bool;
}
