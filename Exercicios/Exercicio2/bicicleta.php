<?php

class LocacaoBicicleta{
    private string $nome;
    private string $tipoBike;
    private int $locacaoHoras;

    public function __construct($nome, $tipoBike, $locacaoHoras){
        $this->nome = $nome;
        $this->tipoBike = $tipoBike;
        $this->locacaoHoras = $locacaoHoras;
    }

    public function GetNome(){
        return $this->nome;
    }

    public function GetTipoBike(){
        return $this->tipoBike;
    }

    public function GetHoras(){
        return $this->locacaoHoras;
    }

    public function calcularValorBruto(){
        if ($this->tipoBike == "Comum"){
            return $this->locacaoHoras * 10;
        }
        elseif ($this->tipoBike == "Eletrica"){
            return $this->locacaoHoras * 18;
        }
    }

    public function calcularDesconto(){
        if ($this->locacaoHoras >= 5){
            return $this->calcularValorBruto() * 0.10;
        }
    }

    public function calcularTotal(){
        return $this->calcularValorBruto() - $this->calcularDesconto();
    }
}

?>