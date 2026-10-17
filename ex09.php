<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
    <style>table { border-collapse: collapse; width: 200px; }
        th, td { border: 1px solid brown; padding: 5px; text-align: left; }</style>
</head>
<body>
    <?php
    $notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
    ];
    $statue="";
    $somme=0;
    $nbr_V=0;
    $meilleur_note=0;
    $meilleur_etudiant="";
    //$statut = ($note >= 10) ? "Validé" : "Non validé";
    echo "<table>";
    echo "<tr><th>Etudiant</th><th>Note</th><th>Statue</th></tr>";
    foreach($notes as $nom=>$note){
        $somme +=$note;
        if($note>=10){
             $statue="Validé" ;
             $nbr_V +=1 ;
        }else{
            $statue="Non Validé";
        }
        if($note>$meilleur_note){
            $meilleur_note=$note;
            $meilleur_etudiant=$nom;
        }
        echo "<tr><td>$nom :</td><td>$note </td><td>$statue</td></tr><br>";
    }
        echo "</table>";
    $moyenne = $somme / count($notes);

    echo "<h3>Statistiques</h3>";
    echo "<ul>";
    echo "<li>Moyenne de la classe : $moyenne</li>";
    echo "<li>Nombre d'étudiants ayant validé : $nbr_V </li>";
    echo "<li>Meilleure note : $meilleur_note (obtenue par $meilleur_etudiant)</li>";
    echo "</ul>";
    ?>
</body>
</html>