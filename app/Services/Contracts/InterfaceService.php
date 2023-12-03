<?php

namespace App\Services\Contracts;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

interface InterfaceService
{
    public function save(array $data): JsonResponse|JsonResource;
    public function findOne(int $id): JsonResponse|JsonResource;
    public function delete(int $id): JsonResponse|JsonResource;
    public function findAll(): JsonResponse|JsonResource;
    public function update(array $data, $id): JsonResponse|JsonResource;
}
