
<?php
    

class Film {
    private $titolo;
    private $genere;
    private $regista;
    private $durata;
    private $anno;
    public $attori;

    
    public function __construct($_titolo,$_genere,$_regista,$_durata,$_anno,$_attori){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->regista = $_regista;
        $this->durata = $_durata;
        $this->anno = $_anno;
        $this->attori = $_attori;
    }
    public function getTitolo(){
        return $this->titolo;
    }
}


?>
