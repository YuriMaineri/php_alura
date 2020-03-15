<?php

use Alura\Banco\Modelo\{Conta\Conta, Conta\ContaCorrente, Conta\ContaPoupanca, Conta\Titular, Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'), 'yuritt',
        new Endereco('porto alegre', 'medianeria', 'rua teste', '66')
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();