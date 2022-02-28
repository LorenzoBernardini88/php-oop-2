<pre>
    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);

    require_once __DIR__. '/classes/Sala.php';
    require_once __DIR__. '/classes/Immersiva.php';
    require_once __DIR__. '/classes/Spettacolo.php';
    require_once __DIR__. '/classes/Film.php';
    require_once __DIR__. '/classes/Attore.php';

    $attori = [
        new Attore('Milan','Stojkovic',21),
        new Attore('Daniele','Ficuciello',26),
        new Attore('Davide','Masa',25),
        new Attore('Matteo','Pompei',27),
    ];
    
    $films = [
        new Film('Batman','Avventura','Christopher Nolan',2,2022,[$attori[0],$attori[1]]),
        new Film('Lo Hobbit','Fantasy','Peter Jackson',1,2021,$attori),
        new Film('Avenger','Azione','Joss Whedon',3,2019,[new Attore('Daniele','Ficuciello',26), new Attore('Daniele','Ficuciello',26)]),
    ];
    
    $sale = [
        new Sala('1',120),
        new Sala('2',100),
        new Immersiva('3',90,'vibrazioni')
    ];
    
    $spettacoli = [
        new Spettacolo('2022-02-01','20:45',$films[0],$sale[0]),
        new Spettacolo('2018-03-11','20:45',$films[1],$sale[1]),
        new Spettacolo('2020-10-25','20:45',$films[2],$sale[2])
    ];
    
    var_dump($spettacoli);
    ?>
</pre>


<!-- // array_push($films[0]->attori,$attori[2]);

    // $spettacolo = new Spettacolo('2022-02-01','10:30');
    // $spettacolo->film = $films[0];

    // $spettacolo->sala = new Sala('1',120);
    // var_dump($spettacolo); -->