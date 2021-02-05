<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

// Namespaces
define('API_NAMESPACE', 'LibAPI');
define('API_DIR_ROOT', dirname(__FILE__));
define('API_DIR_CLASSES', API_DIR_ROOT . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR);
define('API_DIR_CONTROLLERS', API_DIR_ROOT . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR);

require_once API_DIR_ROOT . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
// require_once API_DIR_ROOT . DIRECTORY_SEPARATOR . 'autoload.php';
// require_once API_DIR_ROOT . DIRECTORY_SEPARATOR . 'functions.php';

require './vendor/autoload.php';

use LibAPI\Api;

$app = AppFactory::create();

$app->setBasePath("/LibAPI");

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->run();