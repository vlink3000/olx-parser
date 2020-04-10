<?php

namespace App\Application\Helpers\Router\Routes;

use App\Application\Controller\ApiController;
use Symfony\Component\HttpFoundation\Request;

class ApiRoutes
{
    /**
     * @param Request $request
     *
     * @return void
     */
    public function handleRoute(Request $request): void
    {
        $apiController = new ApiController();

        switch ($request->getPathInfo()) {
            case '/api/v1/dispatch':
                $apiController->triggerDispatch($request);
                break;
            case '/api/v1/message/send':
//                $apiController->sendMessage();
                break;
            case '/api/v1/messages/history':
//                $apiController->showLastMessages();
                break;
            default:
                break;
        }
    }
}