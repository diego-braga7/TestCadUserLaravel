<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Abstracts\AbstractRestController;
use App\Services\Abstracts\AbstractService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends AbstractRestController
{
    public function __construct(private AbstractService $service)
    {
    }

    public function index(): JsonResponse|JsonResource
    {
        return $this->service->findAll();
    }

    public function show($id): JsonResponse|JsonResource
    {
        return $this->service->findOne($id);
    }

    public function store(Request $request): JsonResponse|JsonResource
    {
        return $this->service->save($request->all());
    }

    public function destroy($id): JsonResponse|JsonResource
    {
        return $this->service->delete($id);
    }

    public function update(Request $request, $id): JsonResponse|JsonResource
    {
        return $this->service->update($request->all(), $id);
    }
}
