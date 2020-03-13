<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;

$endeco = new Endereco('Porto Alegre', 'bairro', 'minah rua', '66');
$cpf = new Cpf('123.456.456-10');
$yuri = new Titular( $cpf, 'Yurttti', $endeco);
$primeiraConta = new Conta($yuri);
$primeiraConta->depositar(600);
$primeiraConta->sacar(300);


var_dump($primeiraConta);