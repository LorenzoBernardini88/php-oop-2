<pre>
    <?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', TRUE);
    // ini_set('display_startup_errors', TRUE);

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
        new Immersiva('3',90,['vibrazioni','fumo'])
    ];
    
    $spettacoli = [
        new Spettacolo('2022-02-01',['10:30','12:00','16:00','20:45','22,45'],$films[0],$sale[0]),
        new Spettacolo('2018-03-11',['10:30','12:00','16:00','20:45','22,45'],$films[1],$sale[1]),
        new Spettacolo('2020-10-25',['10:30','12:00','16:00','20:45','22:45'],$films[2],$sale[2])
    ];
    
    //var_dump($spettacoli);

    //CONSEGNA 2022-03-01:
    // 1) Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione 
    //     alle informazioni aggiuntive per le sale immersive.
        //var_dump($sale);

    // 2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.

    // 3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.
    // 4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.

    ?>
</pre>


<!-- // array_push($films[0]->attori,$attori[2]);

    // $spettacolo = new Spettacolo('2022-02-01','10:30');
    // $spettacolo->film = $films[0];
    // $spettacolo->sala = new Sala('1',120);
    // var_dump($spettacolo); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-2-pt2</title>
</head>
<body>
    <h2>Esercizio 1</h2>
    <p>Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione 
    alle informazioni aggiuntive per le sale immersive.</p>
    <?php
        foreach($sale as $elemento){
            echo " {$elemento->getInfo()}  <br>";
        }
    ?>
    <h2>Esercizio 2</h2>
    <p>Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.</p>
    <?php
        foreach($sale as $elemento){
            $sumCapienza += $elemento->getCapienza();
        }
        echo "CAPIENZA TOTALE CINEMA:".$sumCapienza." "."Posti.";
    ?>
    <h2>Esercizio 3</h2>
    <p>Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.</p>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    for($i=0; $i<count($spettacoli[0]->getOrario()); $i++){
        $numProiect = $i++;
    }
    echo "Le Proiezioni totali del film:"." ".$films[0]->getTitolo()." "."nel giorno:"." ".$spettacoli[0]->getData()." "."sono:"." ".$numProiect;
    ?>
</body>
</html>
