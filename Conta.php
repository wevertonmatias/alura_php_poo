<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar($valor){
        if($this->saldo <= $valor){
            echo "Saldo indisponível";
        }else{
            $this->saldo -= $valor;
        }
    }

    public function depositar($valor){
        if($valor <= 0){
            echo "Erro: valor negativo.";
        }else{
            $this->saldo += $valor;
        }
    }

}