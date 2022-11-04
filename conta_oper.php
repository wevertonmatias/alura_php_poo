<?php

require_once "Conta.php";

$minhaConta = new Conta();

$minhaConta->depositar(200);

echo $minhaConta->saldo;
$minhaConta->saldo -= 200;