<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$cpf = new Cpf('123-456-748-10');
$yuri = new Titular( $cpf, 'Yurttti');
$primeiraConta = new Conta($yuri);
$primeiraConta->depositar(600);
$primeiraConta->sacar(300);


var_dump($primeiraConta);