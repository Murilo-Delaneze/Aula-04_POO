<?php

class Produto {

    private string $nome;
    private float $preco;
    private int $quantidade;

    //Método construtor
    public function __construct(
        string $nome,
        float $preco,
        int $quantidade
    ){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

//Retorna o nome
    public function getNome(): string{
        return $this->nome;
    }

//Retorna o preço
    public function getPreco(): float{
        return $this->preco;
    }

//Retorna a quantidade
    public function getQuantidade(): int{
    return $this->quantidade;
    }

//Calcula o valor total
    public function calcularTotal(): float{
        return $this->preco * $this->quantidade;
    }
}