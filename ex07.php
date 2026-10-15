<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <section>
    <h3>Table de multiplication de 7:</h3>
    <?php
    $nombre=7;
    for($i=1;$i<=10;$i++){
        $S=$nombre*$i;
        echo "$nombre x $i = $S  <br> ";
    }
    ?>
    </section>
    <section>
        <h3>Pyramide d'etoiles:</h3>
    <?php
    for($i=1;$i<=6;$i++){
        for($j=1;$j<=$i;$j++){
            echo "* ";
        }
        echo "<br>";
    }
    ?>
    </section>
    
</body>
</html>