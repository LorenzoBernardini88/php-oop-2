
<?php
    

class Film {
    private $titolo;
    private $genere;
    private $durata;
    private $anno;
    public $attori;

    
    public function __construct($_titolo,$_genere,$_durata,$_anno,$_attori){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->anno = $_anno;
        $this->attori = $_attori;
    }

}


?>
