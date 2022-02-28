<pre>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    require_once __DIR__. '/classes/sala.php';
    require_once __DIR__. '/classes/salaImmersiva.php';
    require_once __DIR__. '/classes/Spettacolo.php';
    require_once __DIR__. '/classes/film.php';
    require_once __DIR__. '/classes/Attore.php';

    $attori = [
        new Attore('Milan','Stojkovic',21),
        new Attore('Daniele','Ficuciello',26),
        new Attore('Davide','Masa',25),
        new Attore('Matteo','Pompei',27),
    ];
    $films = [
        new Film('batam','Stojkovic',10,2022,[$attori[0],$attori[1]]),
        new Film('spidermae','Ficuciello',26,2021,$attori),
        new Film('Davide','Masa',25,2019,[new Attore('Daniele','Ficuciello',26), new Attore('Daniele','Ficuciello',26)]),
    ];
    array_push($films[0]->attori,$attori[2]);

    $spettacolo = new Spettacolo('2022-02-01','10:30');
    $spettacolo->film = $films[0];

    $spettacolo->sala = new Sala('1',120);
    var_dump($spettacolo);

    ?>
</pre>