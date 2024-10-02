<?php

class Temperatura
{
    private $id_temperatura;
    private $data_temperatura;
    private $dados_temperatura;

    public function __construct($id, $data, $dados) {
        $this->id_temperatura = $id;
        $this->data_temperatura = $data;
        $this->dados_temperatura = $dados;
    }

    //Getters e Setters 
    public function getIdTemperatura() {
        return $this->id_temperatura;
    }
    public function setIdTemperatura($id) {
        $this->id_temperatura = $id;
    }

    public function getDataTemperatura() {
        return $this->data_temperatura;
    }
    public function setDataTemperatura($data) {
        $this->data_temperatura = $data;
    }

    public function getDadosTemperatura() {
        return $this->dados_temperatura;
    }
    public function setDadosTemperatura($dados){
        $this->dados_temperatura = $dados;
    }
}
?> 