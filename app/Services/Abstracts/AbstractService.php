<?php

namespace App\Services\Abstracts;

use App\Services\Contracts\InterfaceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

use function response;

abstract class AbstractService implements InterfaceService
{
    protected $model;

    abstract public function save(array $data): JsonResponse|JsonResource;

    abstract public function findOne(int $id): JsonResponse|JsonResource;

    abstract public function findAll(): JsonResponse|JsonResource;

    abstract public function delete(int $id): JsonResponse|JsonResource;

    abstract public function update(array $data, $id): JsonResponse|JsonResource;


    /**
     * @param mixed $responseData
     * @param int $status
     * @return JsonResponse
     */
    protected function jsonResponse(mixed $responseData, int $status = Response::HTTP_OK): JsonResponse
    {
        return response()->json($responseData, $status);
    }
}
