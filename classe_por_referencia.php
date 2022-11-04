<?php

require "Conta.php";

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Weverton Matias';
$primeiraConta->saldo = 1500;

var_dump($primeiraConta);

$segundaConta = $primeiraConta;
$segundaConta->saldo = 7500;

var_dump($segundaConta);
var_dump($primeiraConta);