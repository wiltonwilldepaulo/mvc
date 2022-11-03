<?php

namespace app\controllers;

use app\database\models\Cliente;

class ControllerCliente extends Base
{
    private $cliente;
    public function __construct()
    {
        $this->cliente = new Cliente();
    }
    public function listacliente($request, $response)
    {
        $clientes = $this->cliente->find();
        //RETORNAMOS A VIEW 
        return $this->getTwig()->render(
            $response,
            $this->setView("listacliente"),
            [
                "clientes" => $clientes,
                "lista" => HOME,
                "base_url" => BASE_URL,
                "descricao_label" => "Listagem de clientes"
            ]
        );
    }
}
