<?php

namespace App\Application\Validator;

use Symfony\Component\HttpFoundation\Request;

interface RequestValidatorInterface
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function validateRequestData(Request $request): array;
}