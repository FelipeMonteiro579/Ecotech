<?php
class Dispositivo
{
    public $id_dispositivo;
    public $nome_dispositivo;
    public $id_usuario;

    public function __construct(int $id_dispositivo, string $nome_dispositivo) {
        $this->id_dispositivo = $id_dispositivo;
        $this->nome_dispositivo = $nome_dispositivo;
    }
}
