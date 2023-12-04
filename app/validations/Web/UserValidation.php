<?php
namespace App\validations\Web;

use App\validations\Api\UserValidation as ApiUserValidation;

class UserValidation extends ApiUserValidation
{
    protected function getRules(): array
    {
        $rules = parent::getRules();
        $rules['password'] = [self::REQUIRED, 'string', 'min:6', 'max:20', 'confirmed'];
        return $rules;
    }

    protected function getMessages(): array
    {
        $messages = parent::getMessages();
        $messages['password.confirmed'] = 'A confirmação da senha não corresponde.';
        $messages['password.required'] = 'O campo senha é obrigatório.';
        $messages['password.min'] = 'O campo senha deve ter no mínimo 6 caracteres.';
        $messages['password.max'] = 'O campo senha deve ter no máximo 20 caracteres.';
        $messages['email.unique'] = 'O email informado já está cadastrado.';
        $messages['email.required'] = 'O campo email é obrigatório.';
        $messages['email.email'] = 'O campo email deve ser um email válido.';
        $messages['name.required'] = 'O campo nome é obrigatório.';
        $messages['name.min'] = 'O campo nome deve ter no mínimo 3 caracteres.';
        $messages['name.max'] = 'O campo nome deve ter no máximo 50 caracteres.';
        $messages['name.string'] = 'O campo nome deve ser um texto.';
        
        return $messages;
    }
}