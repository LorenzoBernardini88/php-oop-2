<?php
class Spettacolo {
    private $data;
    private $orario;
    public $film;
    public $sala;

    public function __construct($_data,$_orario){
        $this->data = $_data;
        $this->orario = $_orario;
    }
}