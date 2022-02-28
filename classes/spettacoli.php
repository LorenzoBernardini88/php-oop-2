<?php
require_once __DIR__. "/film.php";
require_once __DIR__. "/sala.php";

class Spettacolo {
    private $data;
    private $orario;

    public function __construct($_data,$_orario){
        $this->data = $_data;
        $this->orario = $_orario;
    }
}