<?php

namespace Alura\Banco\Modelo;

class Cpf
{
    private $cpf;

    public function __construct(string $cpf)
    {
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($cpf === false) {
            echo "Cpf inválido";
            exit();
        }

        $this->cpf = $cpf;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

}