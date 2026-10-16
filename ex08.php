<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <?php
    //Partie 1:
    $N=0;
    while($N<=20){
        if($N==10){
            echo"<strong> $N </strong><br> ";
        }
        else{
            echo "$N <br>";
        }
        $N=$N+2;
    }
    # partie 2:
    echo "<h2>Partie 2:</h2>";
    $compt=5;
    $nbr_itération=0;
    do{
        $nbr_itération++;
    }while($compt<5);
    echo "Nombre d'itération avec do while : $nbr_itération <br>";
    $compt=5;
    $nbr_itération=0;
    while($compt<5){
        $nbr_itération++;
    }
    echo "Nombre d'itération avec while : $nbr_itération <br>";
    echo "<h2>Partie 2:</h2>";
    
    for($i=0;$i<20;$i++){
        if($i%3==0){
            continue;
        }elseif($i==16){
            break;
        }else{
            echo " $i |";
        }
    }

    ?>
</body>
</html>
