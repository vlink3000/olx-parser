<?php

namespace App\Application\Helpers\Router;

use App\Application\Helpers\Router\Routes\ApiRoutes;
use Symfony\Component\HttpFoundation\Request;

class RouteRecognizer
{
    /**
     * @param Request $request
     *
     * @return void
     */
    public function recognizeRoute(Request $request): void
    {
        if (strpos($request->getRequestUri(),'api/') !== false) {
            $apiHandler = new ApiRoutes();
            $apiHandler->handleRoute($request);
        }
    }
}