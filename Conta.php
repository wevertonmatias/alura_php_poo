<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

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
}