<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

use App\Handler\SearchProductHandler;

return function (App $app) {

    $app->get('/foo', function (Request $request, Response $response, array $args) {

        $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);

        $response->getBody()->write($payload);

        return $response->withHeader('Content-Type', 'application/json');
    });

    $app->get('/products/search', new SearchProductHandler());
};
