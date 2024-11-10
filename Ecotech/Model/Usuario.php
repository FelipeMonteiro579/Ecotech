<?php

class Usuario 
{
    public $id_usuario;
    public $nome_usuario;
    public $email_usuario; 
    public $senha_usuario;
    
    //Construtor    
    public function __construct(string $nome, string $email, string $senha) {
        $this->nome_usuario = $nome;
        $this->email_usuario = $email;
        $this->senha_usuario = $senha;
    }

    //Getters e Setters
    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function setIdUsuario($id) {
        $this->id_usuario = $id;
    }

    public function getNomeUsuario() {
        return $this->nome_usuario;
    }

    public function setNomeUsuario($nome) {
        $this->nome_usuario = $nome;
    }

    public function getEmailUsuario() {
        return $this->email_usuario;
    }

    public function setEmailUsuario($email) {
        $this->email_usuario = $email;
    }

    public function getSenhaUsuario() {
        return $this->senha_usuario;
    }

    public function setSenhaUsuario($senha) {
        $this->senha_usuario = $senha;
    }
}
?> 