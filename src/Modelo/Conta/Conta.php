<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;//atributo da classe


    // Iniciar o obj sendo necessário passar argumentos para estar válido.
    public function __construct(Titular $titular)
    {

        $this->titular = $titular;
        //Inicializa o obj Conta com saldo 0
        $this->saldo = 0;
        self::$numeroDeContas++;// acessa o atributo da classe e incrementa
        //self 'apelido' reservado para chamar a classe atual
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();

        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }


    public static function recuperaNumeroDeContas(): int
    {
        return  self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}