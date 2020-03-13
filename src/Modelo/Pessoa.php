<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome,Cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): Cpf
    {
        return $this->cpf->recuperaCpf();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome tem que ter mais que 5 caracteres";
            exit();
        }
    }

}