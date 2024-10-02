<?php

class Humidade 
{
    private $id_umidade;
    private $data_umidade;
    private $dados_umidade; 

    public function __construct($id, $data, $dados)
    {
        $this->id_umidade = $id;
        $this->data_umidade = $data;
        $this->dados_umidade = $dados;
    }

    //Getters e Setters 
    public function getIdUmidade() {
        return $this->id_umidade;
    }
    public function setIdUmidade($id) {
        $this->id_umidade = $id;
    }
    
    public function getDataUmidade() {
        return $this->data_umidade;
    }
    public function setDataUmidade($data) {
        $this->data_umidade = $data;
    }

    public function getDadosUmidade() {
        return $this->dados_umidade;
    }
    public function setDadosUmidade($dados) {
        $this->dados_umidade = $dados;
    }
}
?> 