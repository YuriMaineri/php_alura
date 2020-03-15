<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Porto Alegre', 'Medianeira', 'felizardo de farias', '66');
$outroEndereco = new Endereco('Viamao', 'Guaju', 'alameda', '93');

echo $umEndereco->rua;


echo $umEndereco . PHP_EOL;
echo $outroEndereco;
