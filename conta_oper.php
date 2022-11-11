<?php

require_once "Conta.php";
require_once "Titular.php";


$minhaConta = new Conta(new Titular('Weverton1', '111', ));
$minhaConta2 = new Conta(new Titular('Weverton2', '222'));
$minhaConta3= new Conta(new Titular('Weverton3', '333'));

echo $minhaConta2->mostrarNomeTitular() . PHP_EOL;
echo $minhaConta2->mostrarCpfTitular() . PHP_EOL;