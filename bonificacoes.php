<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umfuncionario = new Funcionario(
    'Yuripp',
    new Cpf('123.456.789-54'),
    'Dev', 1000);

$doisfuncionario = new Funcionario(
    'jadsjsaj',
    new Cpf('987.456.156-54'),
    'Anaslita',
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacao($umfuncionario);
$controlador->adicionarBonificacao($doisfuncionario);

echo $controlador->recuperaTotal();

