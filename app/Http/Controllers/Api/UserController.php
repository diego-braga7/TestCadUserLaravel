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
        // parent::__construct($service);
    }

    public function index(): JsonResponse|JsonResource
    {
        // $this->service->save(['name' => 'Teste']);

        return response()->json(['message' => 'Hello World!']);
    }

    public function store(Request $request): JsonResponse|JsonResource
    {

        return $this->service->save($request->all());

        // return response()->json(['message' => 'Hello World!']);
    }
}
