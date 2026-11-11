<?php

class EmprestimoLivros {
    private string $nome;
    private string $tituloLivro;
    private int $diasAtraso;

    public function __construct($nome, $tituloLivro, $diasAtraso) {
        $this->nome = $nome;
        $this->tituloLivro = $tituloLivro;
        $this->diasAtraso = $diasAtraso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTituloLivro() {
        return $this->tituloLivro;
    }

    public function getDiasAtraso() {
        return $this->diasAtraso;
    }

    public function calcularMulta() {
        if ($this->diasAtraso > 1 && $this->diasAtraso <= 5) {
            return $this->diasAtraso * 2.00;
        } elseif ($this->diasAtraso > 6) {
            return (5 * 2) + (($this->diasAtraso - 5) * 3);
        } else {
            return 0.00;
        }
    }

    public function verificarSituacao() {
        if ($this->diasAtraso > 0) {
            return "Atrasado";
        } else {
            return "Em dia";
        }
    }
}

?>