<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execice 3</title>
</head>
<body>
<?php

define('TAUX_TVA' ,20);
define('DEVISE' ,"MAD");
$prixUnitaire=60;
$quantite=3;

$TotalHT = $prixUnitaire * $quantite;
$TVA= $prixUnitaire * (TAUX_TVA/100);
$TotalTTC= $TotalHT + $TVA ;
// AJOUTE DES FRAIS DE LIVRAISON :
$TotalTTC += 15;

echo " <h3>récapitulatif de la commande : </h3> ";
echo "<ul>";
echo "<li>Total HT : " . $TotalHT . " " . DEVISE . "</li>";
echo "<li>TVA (" . TAUX_TVA . "%) : " . $TVA . " " . DEVISE . "</li>";
echo "<li><strong>Total TTC (avec livraison) : " . $TotalTTC . " " . DEVISE . "</strong></li>";
echo "</ul>";
echo defined('TAUX_TVA');
        
?>
</body>
</html>
