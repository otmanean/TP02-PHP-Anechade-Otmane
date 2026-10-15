<?php
$numeroMois = (int)date("m");
switch($numeroMois)
{
    case 1: echo "le moi francais est : JANVIER"; break ;
    case 2: echo "le moi francais est : FEVRIER"; break ;
    case 3: echo "le moi francais est : MARS"; break ;
    case 4: echo "le moi francais est : AVRIL"; break ;
    case 5: echo "le moi francais est : MAI"; break ;
    case 6: echo "le moi francais est : JUIN"; break ;
    case 7: echo "le moi francais est : JUILLET"; break ;
    case 8: echo "le moi francais est : OUT"; break ;
    case 9: echo "le moi francais est : SEPTEMBRE"; break ;
    case 10: echo "le moi francais est : OCTOBRE"; break ;
    case 11: echo "le moi francais est : NOVEMBRE"; break ;
    case 12: echo "le moi francais est : DECEMBRE"; break ;
    default : echo "'Numero de mois INVALIDE' "." !Veuiller saisir un nombre entre 1 et 12!!!";
}
?>