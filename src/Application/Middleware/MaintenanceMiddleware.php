<?php
declare(strict_types=1);

namespace App\Application\Middleware;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface as Middleware;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Factory\AppFactory;

class MaintenanceMiddleware implements Middleware
{
    /**
     * {@inheritdoc}
     */
    public function process(Request $request, RequestHandler $handler): Response
    {
        /** @var Response $response */
        $response = (AppFactory::determineResponseFactory())->createResponse(503);
        $response = $response->withHeader('Retry-After', 60 * 5);
        $response->getBody()->write(json_encode([
            'message' => 'Site under maintenance. Please try again later.'
        ]));

        return $response;
    }
}
