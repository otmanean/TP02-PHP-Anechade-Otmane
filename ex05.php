<?php
$Moyenne=11;
echo "NOTE tester : $Moyenne <br>";
if($Moyenne>=0 && $Moyenne<=20){
    if ($Moyenne<10){
        echo "| Inférieure à 10 | Non validé |";
    }elseif($Moyenne>=10 && $Moyenne <12){
        echo "| De 10 inclus à 12 exclu | Passable |";
    }elseif ($Moyenne>=12 && $Moyenne<14){
        echo"| De 12 inclus à 14 exclu | Assez bien |";
    }elseif($Moyenne>=14 && $Moyenne<16){
        echo"| De 14 inclus à 16 exclu | Bien ";
    }elseif($Moyenne>=16 && $Moyenne<20){
        echo"| De 16 à 20 inclus | Très bien |";
    }
}else{
    echo "note invalide";
}
?>