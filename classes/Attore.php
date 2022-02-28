<?php
class Attore{
    private $nome;
    private $cognome;
    private $età;

    public function __construct($_nome,$_cognome,$_età){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->età = $_età;
    }
}