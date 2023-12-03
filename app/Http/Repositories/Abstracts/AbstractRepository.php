<?php

namespace App\Http\Repositories\Abstracts;

use App\Http\Repositories\Contracts\InterfaceRepository;
use App\Models\Contracts\interfaceModel;

abstract class AbstractRepository implements InterfaceRepository
{
//     protected $model;

//     public function __construct(
//         interfaceModel $model
//         )
//     {
//         $this->model = $model;
//     }

//     public function all()
//     {
//         return $this->model->all();
//     }

//     public function find($id)
//     {
//         return $this->model->findOrFail($id);
//     }

    // public function create(array $data)
    // {
    //     return $this->model->create($data);
    // }

//     public function update(array $data, $id)
//     {
//         $this->model->findOrFail($id)->update($data);
//         return $this->model->findOrFail($id);
//     }

//     public function delete($id)
//     {
//         $this->model->findOrFail($id)->delete();
//         return response()->json(['message' => 'Deleted successfully']);
//     }
}
