<?php

require_once __DIR__. "/sala.php";

class Immersiva extends sala {

    private $effetti;

    public function __construct($_nome,$_capienza,$_effetti){
        parent::__construct($_nome,$_capienza);
        $this->effetti = $_effetti;
    }
}
