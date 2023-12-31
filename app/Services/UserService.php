<?php

namespace App\Services;

use App\Repositories\Abstracts\AbstractRepository;
use App\Services\Abstracts\AbstractService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class UserService extends AbstractService
{
    public function __construct(private AbstractRepository $repository)
    {
    }

    public function findOne($id): JsonResponse|JsonResource
    {
        try {
            $user = $this->repository->findOne($id);
            return $this->jsonResponse(['message' => 'Found successfully', 'data' => $user], Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->jsonResponse(
                ['message' => 'Error when finding', 'data' => $e->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function save(array $data): JsonResponse|JsonResource
    {
        try {
            $user = $this->repository->save($this->preparePassword($data));
            return $this->jsonResponse(['message' => 'Created successfully', 'data' => $user], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->jsonResponse(
                ['message' => 'Error when creating', 'data' => $e->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    private function preparePassword(array $data): array
    {
        $data['password'] = bcrypt($data['password']);
        return $data;
    }

    public function findAll(): JsonResponse|JsonResource
    {
        try {
            $users = $this->repository->findAll();
            return $this->jsonResponse(['message' => 'Found successfully', 'data' => $users], Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->jsonResponse(
                ['message' => 'Error when finding', 'data' => $e->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }


    public function delete($id): JsonResponse|JsonResource
    {
        try {
            $deleted = $this->repository->delete($id);
            if (! $deleted) {
                return $this->jsonResponse(['message' => 'Not found'], Response::HTTP_NOT_FOUND);
            }
            return $this->jsonResponse(['message' => 'Deleted successfully'], Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->jsonResponse(
                ['message' => 'Error when deleting', 'data' => $e->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    public function update(array $data, $id): JsonResponse|JsonResource
    {
        try {
            $user = $this->repository->update($data, $id);
            return $this->jsonResponse(['message' => 'Updated successfully', 'data' => $user], Response::HTTP_OK);
        } catch (\Exception $e) {
            return  $this->jsonResponse(
                ['message' => 'Error when updating', 'data' => $e->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
