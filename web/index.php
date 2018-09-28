<?php
declare(strict_types=1);

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;

require __DIR__ . './../vendor/autoload.php';

$app = new App(require __DIR__ . '/../config/config.php');
$app->get('/add/{n1}/{n2}', function (RequestInterface $request, ResponseInterface $response, $args) use ($app) {
    /** @var \Bergau\Math $math */
    $math = $app->getContainer()->get(\Bergau\Math::class);
    $result = $math->add((int) $args['n1'], (int)$args['n2']);
    return $response->getBody()->write($result);
});
$app->run();
