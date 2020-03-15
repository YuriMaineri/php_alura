<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new \Alura\Banco\Modelo\Funcionario\Gerente(
    "YuriTii",
    new Cpf('123.456.897-45'),
    3500
);

$autenticador->tentaLogin($umDiretor, '4321');
