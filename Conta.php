<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Weverton Matias';
$primeiraConta->saldo = 1500;

var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta->cpfTitular = '147.258.369.12';
$segundaConta->nomeTitular = 'Catrina Cebi';
$segundaConta->saldo = 7500;

var_dump($segundaConta);