<?php

namespace App\Services\Contracts;

interface InterfaceService
{
    // public function index();
    // public function show($id);
    // public function update(Request $request, $id);
    // public function destroy($id);
    public function save(array $data);
}
