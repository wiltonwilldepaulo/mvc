<?php
// Define app routes
$app->get('/hello', function ($request, $response) {
    $response->getBody()->write("Hello");
    return $response;
});
// Define app routes
$app->get('/', function ($request, $response) {
    $response->getBody()->write("Hello");
    return $response;
});
$app->get('/cliente', function ($request, $response) {
    $response->getBody()->write("Clientes do sistemas");
    return $response;
});
$app->post('/inserircliente', function ($request, $response) {
    $response->getBody()->write("Cadastro realizado com sucesso!");
    return $response;
});
