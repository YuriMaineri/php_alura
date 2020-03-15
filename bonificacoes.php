<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umfuncionario = new Desenvolvedor(
    'Yuripp',
    new Cpf('123.456.789-54'),
    'Dev',
    1000);

$umfuncionario->sobeDeNivel();

$doisfuncionario = new Diretor(
    'jadsjsaj',
    new Cpf('987.456.156-54'),
    'Anaslita',
    3000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacao($umfuncionario);
$controlador->adicionarBonificacao($doisfuncionario);

echo $controlador->recuperaTotal();

