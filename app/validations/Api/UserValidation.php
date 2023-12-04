<?php
namespace App\validations\Api;

use App\validations\Abstracts\AbstractValidation;

class UserValidation extends AbstractValidation
{
    protected function getRules(): array
    {
        return [
            'name' => [self::REQUIRED, 'string', 'min:3', 'max:50'],
            'email' => [self::REQUIRED, 'email', 'unique:users,email'],
            'password' => [self::REQUIRED, 'string', 'min:6', 'max:20'],
        ];
    }
}
