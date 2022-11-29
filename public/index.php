<?php

use Slim\Factory\AppFactory;
use Slim\Views\Twig;

require __DIR__ . '/../vendor/autoload.php';
$app = AppFactory::create();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);
//DIRETÓRIO BASE DA APLICAÇÃO.
define("ROOT", dirname(__FILE__, 2));
//DIRETÓRIO DAS VIEWS
define("DIR_VIEWS", ROOT . "/app/views/");
//EXTENSSÃO PADRÃO DAS VIEWS
define("EXT_VIEWS", ".html");

$app->get('/cliente', function ($request, $response) {

    $template = Twig::create(DIR_VIEWS);

    return $template->render(
        $response,
        'cliente.html',
        [
            "titulo" => "Cadastro e edição de clientes",
            "teste" => "Olá mundo!!!"
        ]
    );
});
$app->get('/fornecedor', function ($request, $response) {

    $template = Twig::create(DIR_VIEWS);

    return $template->render(
        $response,
        'fornecedor.html',
        [
            "titulo" => "Cadastro e edição de fornecedores",
            "teste" => "Olá mundo!!!"
        ]
    );
});
$app->run();
