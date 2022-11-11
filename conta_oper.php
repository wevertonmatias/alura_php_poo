<?php

require_once "Conta.php";

$minhaConta = new Conta('111', 'Weverton1');
$minhaConta2 = new Conta('222', 'Weverton2');
$minhaConta3= new Conta('333', 'Weverton3');
unset($minhaConta2);
die();
//echo Conta::numeroDeContas();