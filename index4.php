<?php

class Aluno
{
    public $nome;
    public $nota1;
    public $nota2;

    public function calcularMedia()
    {
        echo ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao()
    {
        $media = 6.5;

        if ($media >= 7) {
            echo "Aprovado";
        } elseif ($media >= 5 && $media <= 6.9) {
            echo "Recuperação";
        } else {
            echo "Reprovado";
        }
    }
}

$aluno1 = new Aluno();
$aluno1->nome = "Carlos";
$aluno1->nota1 = 6.8;
$aluno1->nota2 = 7.1;

echo "Média: " . $aluno1->calcularMedia() . "<br>";
echo "Situação: ";
$aluno1->verificarSituacao();
