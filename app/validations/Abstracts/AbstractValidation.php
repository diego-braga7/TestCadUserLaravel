<?php

namespace App\validations\Abstracts;

use App\validations\Contracts\InterfaceValidation;
use Illuminate\Contracts\Validation\Validator as IValidator;
use Illuminate\Support\Facades\Validator;

abstract class AbstractValidation
{
    protected const REQUIRED = 'required';

    protected const SOMETIMES = 'sometimes';

    protected array $data;

    protected string $requireValidationMethod = self::REQUIRED;

    /**
     * @return array
     */
    protected function getMessages(): array
    {
        return [];
    }

    /**
     * @return array
     */
    protected function getCustomAttributes(): array
    {
        return [];
    }

    /**
     * @param String[][] $data
     * @return IValidator
     */
    public function make(array $data): IValidator
    {
        return Validator::make(
            $data,
            $this->getRules(),
            $this->getMessages(),
            $this->getCustomAttributes()
        );
    }

    /**
     * @param bool $sometimes
     * @return AbstractValidation
     */
    public function requireSometimes(bool $sometimes = true): self
    {
        if ($sometimes) {
            $this->requireValidationMethod = self::SOMETIMES;
        } else {
            $this->requireValidationMethod = self::REQUIRED;
        }

        return $this;
    }

    /**
     * @return array
     */
    abstract protected function getRules(): array;
}
