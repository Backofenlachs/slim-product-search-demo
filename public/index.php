<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

/**
 * Routes laden
*/
(require __DIR__ . '/../config/routes.php')($app);

/**
 * App starten
 */
$app->run();


