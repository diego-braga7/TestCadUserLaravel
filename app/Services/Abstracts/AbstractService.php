<?php

namespace App\Services\Abstracts;

use App\Services\Contracts\InterfaceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

abstract class AbstractService implements InterfaceService
{
    protected $model;

    abstract public function save(array $data): JsonResponse|JsonResource;

    abstract public function findOne(int $id): JsonResponse|JsonResource;

    abstract public function findAll(): JsonResponse|JsonResource;

    abstract public function delete(int $id): JsonResponse|JsonResource;

    abstract public function update(array $data, $id): JsonResponse|JsonResource;
}
