<?php

namespace App\Http\Controllers\Api\Abstracts;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Api\Contracts\InterfaceRestController;
use Illuminate\Http\Resources\Json\JsonResource;

abstract class AbstractRestController extends Controller implements InterfaceRestController
{
    use ValidatesRequests;

    public function index(): JsonResponse|JsonResource
    {
        return $this->httpResponseMethodNotAllowed();
    }


    public function show($id): JsonResponse|JsonResource
    {
        return $this->httpResponseMethodNotAllowed();
    }

    public function update(Request $request, $id): JsonResponse|JsonResource
    {
        return $this->httpResponseMethodNotAllowed();
    }

    public function destroy($id): JsonResponse|JsonResource
    {
        return $this->httpResponseMethodNotAllowed();
    }

    public function store(Request $request): JsonResponse|JsonResource
    {
        return $this->httpResponseMethodNotAllowed();
    }

    protected function httpResponseMethodNotAllowed(): JsonResponse
    {
        return response()->json(['error' => 'Method Not Allowed'], 405);
    }
}
