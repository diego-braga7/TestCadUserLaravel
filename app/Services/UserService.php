<?php

namespace App\Services;

use App\Http\Repositories\Abstracts\AbstractRepository;
use App\Services\Abstracts\AbstractService;
use App\Services\Contracts\InterfaceService;
use Illuminate\Http\Response;

class UserService extends AbstractService implements InterfaceService
{
    public function __construct(private AbstractRepository $repository)
    {
    }

    public function save(array $data)
    {
        try {
            $user = $this->repository->save($data);
            return response()->json(['message' => 'Created successfully', 'data' => $user], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return response()->json(
                ['message' => 'Error when creating', 'data' => $e->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }
}
