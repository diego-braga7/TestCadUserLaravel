<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Abstracts\AbstractService;
use App\validations\Abstracts\AbstractValidation;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
class UserController extends Controller
{
    public function __construct(
        private AbstractService $service,
        private AbstractValidation $validation
    ) {
    }
    
    public function show()
    {
        return view('user.form');
    }


    public function process(Request $request){

        $validator = $this->validation->make($request->all());

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->toArray());
        }

         $this->service->save($request->all());
         
         return redirect('/user/register')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
