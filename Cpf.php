<?php

Class Cpf{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $validacao = filter_var($cpf, FILTER_VALIDATE_REGEXP,[
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if($validacao === false){
            echo "Cpf inválido - {$cpf}" . PHP_EOL;
            exit;
        }
        $this->cpf = $cpf;
    }
}