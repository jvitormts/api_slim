<?php
/**
 * Created by Joao Vitor.
 * User: Martins
 * Date: 18/01/2019
 * Time: 23:06
 */

require __DIR__.'/vendor/autoload.php';



$settings = require __DIR__.'/src/settings.php';

//instanciando o Slim
$app = new Slim\App($settings);

//Chamando arquivos com as rotas
require __DIR__.'/src/routes.php';


$app->run();