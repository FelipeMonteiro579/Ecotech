<?php

class Irrigacao
{
    private $id_irrigacao;
    private $data_irrigacao;
    private $dados_irrigacao;

    public function __construct($id, $data, $dados)
    {
        $this->id_irrigacao= $id;
        $this->data_irrigacao = $data;
        $this->dados_irrigacao = $dados;
    }

    //Getters e Setters 
    public function getIdIrrigacao() {
        return $this->id_irrigacao;
    }
    public function setIdIrrigacao($id) {
        $this->id_irrigacao = $id; 
    }

    public function getDataIrrigacao() {
        return $this->data_irrigacao;
    }
    public function setDataIrrigacao($data) {
        $this->data_irrigacao = $data;
    }

    public function getDadosIrrigacao() {
        return $this->dados_irrigacao;
    }
    public function setDadosIrrigacao($dados) {
        $this->dados_irrigacao = $dados;
    }
}
?>