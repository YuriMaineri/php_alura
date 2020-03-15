<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umfuncionario = new Desenvolvedor(
    'Yuripp',
    new Cpf('123.456.789-54'),
    1000);

$umfuncionario->sobeDeNivel();

$doisfuncionario = new Diretor(
    'jadsjsaj',
    new Cpf('987.456.156-54'),
    3000
);

$umEditor = new EditorVideo(
    'Ateus',
    new Cpf('123.456.748-10'),
    1500
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacao($umfuncionario);
$controlador->adicionarBonificacao($doisfuncionario);
$controlador->adicionarBonificacao($umEditor);

echo $controlador->recuperaTotal();

