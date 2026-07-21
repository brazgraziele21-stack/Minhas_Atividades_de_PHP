<?php

class Filme
{
    public $titulo;
    public $genero;
    public $ano;
    public $diretor;
}

$filme2 = new Filme();
$filme2->titulo = "Ponte para Terabítia";
$filme2->genero = "Fantasia";
$filme2->ano = 2007;
$filme2->diretor = "Gabor Csupo";

echo "$filme2->titulo <br>";
echo "$filme2->genero <br>";
echo "$filme2->ano <br>";
echo "$filme2->diretor <br>";

$filme2 = new Filme();
$filme2->titulo = "O Homem do Futuro";
$filme2->genero = "Ficção Científica";
$filme2->ano = 2011;
$filme2->diretor = "Claudio Torres";

echo "$filme2->titulo <br>";
echo "$filme2->genero <br>";
echo "$filme2->ano <br>";
echo "$filme2->diretor <br>";
