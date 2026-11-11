<?php

class ReservaHotel {
    private string $nome;
    private string $tipoQuarto;
    private int $QuantidadedeDiarias;

    public function __construct($nome, $tipoQuarto, $QuantidadedeDiarias) {
        $this->nome = $nome;
        $this->tipoQuarto = $tipoQuarto;
        $this->QuantidadedeDiarias = $QuantidadedeDiarias;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTipoQuarto() {
        return $this->tipoQuarto;
    }

    public function getQuantidadeDeDiarias() {
        return $this->QuantidadedeDiarias;
    }

    public function calcularValorTotal() {
        $valor = 0;

        if ($this->tipoQuarto == "Quarto standart") {
            $valor = $this->QuantidadedeDiarias * 150;
        } elseif ($this->tipoQuarto == "Café da Manha") {
            $valor = $this->QuantidadedeDiarias * 25;
        } elseif ($this->tipoQuarto == "suite") {
            $valor = $this->QuantidadedeDiarias * 230;
        }

        return $valor;
    }
}

?>