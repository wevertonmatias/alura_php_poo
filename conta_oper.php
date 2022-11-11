<?php

require_once "Conta.php";
require_once "Titular.php";
require_once "Cpf.php";

$cpfTitular = new Cpf('111.111.111-01');
$titular = new Titular('Weverton1', $cpfTitular);
$minhaConta = new Conta($titular);

$cpfTitular2 = new Cpf('111.111.111-9');
$titular2 = new Titular('Weverton1', $cpfTitular2);
$minhaConta2 = new Conta($titular2);


//$minhaConta2 = new Conta(new Titular('Weverton2', '222'));
//$minhaConta3= new Conta(new Titular('Weverton3', '333'));

