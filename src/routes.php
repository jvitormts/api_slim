<?php
/**
 * Created by Joao Vitor Martins.
 * User: Martins
 * Date: 20/01/2019
 * Time: 01:30
 */

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->get('/hello/[{name}]',function (Request $request, Response $response){
    $name = $request->getAttribute('name') ?? 'World';
    $response->getBody()->write("Hello, {$name}");

    return  $response;
});
