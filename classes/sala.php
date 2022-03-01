<?php 

class Sala {
    protected $nome;
    protected $capienza;
        
    public function __construct($_nome,$_capienza){
        $this->nome = $_nome;
        $this->capienza = $_capienza;
    }

    public function getInfo(){
        return "NOME:{$this->nome} CAPIENZA:{$this->capienza}";
    }
    public function getCapienza(){
        return $this->capienza;
    }
}
    
    
    

