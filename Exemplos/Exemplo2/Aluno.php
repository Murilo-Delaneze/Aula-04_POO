<?php

class Aluno {

    private string $nome;
    private float $nota1;
    private float $nota2;

    //Método construtor
    public function __construct(
        string $nome,
        float $nota1,
        float $nota2
    ){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

//Retorna o nome
    public function getNome(): string{
        return $this->nome;
    }

//Retorna o preço
    public function getNota1(): float{
        return $this->nota1;
    }

//Retorna a quantidade
    public function getNota2(): float{
    return $this->nota2;
    }

//Calcula o valor total
    public function calcularMedia(): float{
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao(){

        $media = $this->calcularMedia();

        if ($media >= 7) {
            return "Aprovado";
        } elseif ($media >= 5) {
            return "Recuperação";
        } else {
            return "Reprovado";
        }

    }
}