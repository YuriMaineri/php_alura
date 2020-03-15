<?php


namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Usuário logado";
        } else {
            echo "Senha incorreta";
        }
    }
}