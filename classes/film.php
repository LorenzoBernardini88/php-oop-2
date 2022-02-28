<pre>
<?php
    
    require_once __DIR__. '/attori.php';

class Film {
    private $titolo;
    private $genere;
    private $durata;
    private $anno;
    private $attori;

    
    public function __construct($_titolo,$_genre,$_durata,$_anno,$_attori){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->anno = $_anno;
        $this->attori = $_attori;
    }

}
$attori = [
    new Attori('Milan','Stojkovic',21),
    new Attori('Daniele','Ficuciello',26),
    new Attori('Davide','Masa',25),
    new Attori('Matteo','Pompei',27),
];

var_dump($attori);

?>
</pre>