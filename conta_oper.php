<?php

require_once "Conta.php";

$minhaConta = new Conta('Weverton', '111.222.333-44');
$minhaConta2 = new Conta('Weverton', '111.222.333-44');
$minhaConta3= new Conta('Weverton', '111.222.333-44');

echo Conta::numeroDeContas();