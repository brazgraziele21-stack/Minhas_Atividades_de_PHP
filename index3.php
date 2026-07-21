<?php

class Usuario
{
    public $nome;
    public $email;
    public $cidade;

    public function __construct($nome, $email, $cidade)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->cidade = $cidade;
    }
}

$usuario1 = new Usuario("Grazi Braz", "brazgrazi@gmail.com", "Guarapuava");

echo "$usuario1->nome <br>";
echo "$usuario1->email <br>";
echo "$usuario1->cidade <br>";
