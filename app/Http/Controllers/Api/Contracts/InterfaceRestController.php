<?php

namespace App\Http\Controllers\Api\Contracts;

use Illuminate\Http\Request;

interface InterfaceRestController
{
    public function index();
    public function show($id);
    public function update(Request $request, $id);
    public function destroy($id);
    public function store(Request $request);
}
