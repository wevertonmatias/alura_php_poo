<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
    private static $numeroDeContas;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->validarNome($nomeTitular);
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    private function validarNome(string $nome): void
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public function sacar($valor)
    {
        if($this->saldo < $valor) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar($valor)
    {
        if($valor <= 0) {
            echo "Erro: valor negativo.";
            return;
        }
        $this->saldo += $valor;
    }

    public function transferir($contaDestino, $valor)
    {
        if($this->saldo < $valor){
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
        $contaDestino->depositar($valor);
    }

    public function mostrarSaldo(): void
    {
        echo $this->saldo;
    }

    public function definirCpf(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function mostrarCpfTitular(): void
    {
        echo $this->cpfTitular;
    }

    public function definirNometitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function mostrarNometitular(string $nome): void
    {
        echo $this->nomeTitular;
    }

    public static function numeroDeContas(): int
    {
        return self::$numeroDeContas . PHP_EOL;
    }
}