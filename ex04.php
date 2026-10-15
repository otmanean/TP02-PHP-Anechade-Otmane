
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <?php
    $Entier=42;
    $Reel=15.8;
    $chaine="42";
    $Booleen1=TRUE;
    $Booleen2=FALSE;
    $Vide=NULL;

    echo "<h3>Valeurs initiales :</h3>";
    echo "<pre>";
    var_dump($Entier, $Reel, $chaine, $Booleen1, $Booleen2, $Vide);
    echo "</pre>";

    $conv1 = (int) $chaine;
    $conv2 = (int) $Reel;
    $conv3 = (string) $Entier;

    echo "<h3>Conversions :</h3>";
    echo "<pre>";
    var_dump($conv1, $conv2, $conv3);
    echo "</pre>";

    echo "<h3>Affichage de true et false avec echo :</h3>";
    echo "<p>true avec echo : '" . $Booleen1 . "'</p>";
    echo "<p>false avec echo : '" . $Booleen2 . "'</p>";

    echo "<h3>Affichage de true et false avec var_dump:</h3>";
    var_dump($Booleen1,$Booleen2);



    echo "<h3>Conversion en booléens :</h3>";
    echo "<pre>";
    var_dump((bool) 0);
    var_dump((bool) "0");
    var_dump((bool) "PHP");
    var_dump((bool) []);
    echo "</pre>";
    ?>
</body>
</html>