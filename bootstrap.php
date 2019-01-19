<?php
/**
 * Created by Joao Vitor.
 * User: Martins
 * Date: 18/01/2019
 * Time: 23:06
 */

require __DIR__.'/vendor/autoload.php';

//instanciando o Slim
$app = new Slim\App;

$app->get('/hello',function (){
    return  'Hello World';
});

$app->get('/rota1',function (){
    return  'Teste rota 1';
});

$app->get('/rota2',function (){
    return  'Teste rota 2';
});

$app->run();