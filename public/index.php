<?php


//use Slim\Factory\AppFactory;

use app\database\models\Posts;

require "../vendor/autoload.php";

$posts = new Posts();
$fieldAndValues = [
    "fields" => [
        "titulo" => "teste",
        "post" => "teste2"
    ],
    "where" => [
        "id" => "1"
    ]
];

$posts->update($fieldAndValues);

/*$app = AppFactory::create();
$app->addRoutingMiddleware();
define("BASE_URL", $app->getBasePath());

//INCLUIMOS AS CONFIGURAÇÕES
require "../app/helpers/config.php";
//INCLUIMOS TODAS AS ROTAS.
require "../app/routes/site.php";
//RUM APP
$app->run();*/
