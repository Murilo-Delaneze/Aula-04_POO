<?php

class Vendedor {
    private string $nome;
    private float $salarioBase;
    private float $totalVendas;

    public function __construct($nome, $salarioBase, $totalVendas) {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
        $this->totalVendas = $totalVendas;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function getTotalVendas() {
        return $this->totalVendas;
    }

    public function calcularComissao() {
        if ($this->totalVendas < 5000) {
            return $this->totalVendas * 0.4;
        }elseif($this->totalVendas > 5000 && $this->totalVendas < 10000){
            return $this->totalVendas * 0.6;
        }else{
            return 0.0;
        }
    }
    public function calculoDeBonus() {
        if ($this->totalVendas > 10000) {
            return ($this->salarioBase * 0.6) + 100;
        } else {
            return 0;
        }
    }

    public function calcularSalarioFinal() {
        return $this->salarioBase + $this->calcularComissao() + $this->calculoDeBonus();
        
    }
  }


?>