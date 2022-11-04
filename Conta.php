<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar($valor){
        if($this->saldo <= $valor){
            echo "Saldo indisponível";
        }else{
            $this->saldo -= $valor;
        }
    }

}