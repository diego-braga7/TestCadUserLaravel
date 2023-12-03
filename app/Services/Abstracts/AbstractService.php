<?php

namespace App\Services\Abstracts;

abstract class AbstractService
{
    protected $model;

    public function __construct(
        // Model $model
    ) {
        // $this->model = $model;
    }

    // public function index()
    // {
    //     return $this->model->all();
    // }

    // public function show($id)
    // {
    //     return $this->model->findOrFail($id);
    // }

    // public function update(Request $request, $id)
    // {
    //     $this->model->findOrFail($id)->update($request->all());
    //     return $this->model->findOrFail($id);
    // }

    // public function destroy($id)
    // {
    //     $this->model->findOrFail($id)->delete();
    //     return response()->json(['message' => 'Deleted successfully']);
    // }

    abstract public function save(array $data);

    // public function store(Request $request)
    // {
    //     return $this->model->create($request->all());
    // }
}
