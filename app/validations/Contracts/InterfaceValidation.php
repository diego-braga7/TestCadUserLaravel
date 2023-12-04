<?php

namespace App\validations\Contracts;

interface InterfaceValidation
{
      /**
     * @param mixed $value
     * @return bool
     */
    public function isValid(mixed $value): bool;
}
