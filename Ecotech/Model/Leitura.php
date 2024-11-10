<?php
    class Leitura
    {
        public $temperatura;
        public $umidade;
        public $nivel_agua;
        public $umidade_solo;
        public $id_dispositivo;

        public function __construct(float $temperatura, float $umidade, int $nivel_agua, int $umidade_solo, int $id_dispositivo) {
            $this->temperatura = $temperatura;
            $this->umidade = $umidade;
            $this->nivel_agua = $nivel_agua;
            $this->umidade_solo = $umidade_solo;
            $this->id_dispositivo = $id_dispositivo;
        }
    }
    
?>