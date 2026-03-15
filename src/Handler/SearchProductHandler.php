<?php

namespace App\Handler;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Repository\InventoryRepository;

class SearchProductHandler {
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $params = $request->getQueryParams();
        $term = $params['q'] ?? '';

        $repo = new InventoryRepository();
        $products = $repo->search($term);

        $payload = json_encode(
            $products,
            JSON_PRETTY_PRINT
        );

        $response->getBody()->write($payload);

        return $response->withHeader('Content-Type', 'application/json');
    }
}