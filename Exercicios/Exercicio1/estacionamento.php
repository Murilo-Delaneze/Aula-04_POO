<?php

class Estacionamento{
    private string $placa;
    private string $tipoVeiculo;
    private int $horas;

    public function __construct($placa, $tipoVeiculo, $horas){
        $this->placa = $placa;
        $this->tipoVeiculo = $tipoVeiculo;
        $this->horas = $horas;
    }

    public function GetPlaca(){
        return $this->placa;
    }

    public function GetTipoVeiculo(){
        return $this->tipoVeiculo;
    }

    public function GetHoras(){
        return $this->horas;
    }

    public function calcularValor(){
        if ($this->tipoVeiculo == "Carro"){
            return $this->horas * 10;
        }
        elseif ($this->tipoVeiculo == "Moto"){
            return $this->horas * 7;
        }
    }
}

?>