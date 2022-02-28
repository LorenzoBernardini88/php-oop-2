<?php

require_once __DIR__. "/Sala.php";

class Immersiva extends Sala {

    private $effetti;

    public function __construct($_nome,$_capienza,$_effetti){
        parent::__construct($_nome,$_capienza);
        $this->effetti = $_effetti;
    }
}
