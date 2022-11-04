<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar($valor){
        if($this->saldo < $valor) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar($valor){
        if($valor <= 0) {
            echo "Erro: valor negativo.";
            return;
        }
        $this->saldo += $valor;
    }

    public function transferir($contaDestino, $valor){
        if($this->saldo < $valor){
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
        $contaDestino->depositar($valor);
    }

}