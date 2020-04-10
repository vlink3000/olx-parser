<?php

namespace App\Application\Controller;

use App\Application\Validator\RequestValidator;
use App\Infrastructure\Repository\NotifierRepository;
use Symfony\Component\HttpFoundation\Request;

class ApiController
{
    /**
     * @param Request $request
     *
     * @return void
     */
    public function triggerDispatch(Request $request): void
    {
        $validator = new RequestValidator();

        $this->getRepository()->triggerDispatch(
            $validator->validateRequestData($request)
        );
    }

    /**
     * @return NotifierRepository
     */
    private function getRepository(): NotifierRepository
    {
        return new NotifierRepository();
    }
}