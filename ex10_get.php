<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>
    <?php
    if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
        $nom = trim($_GET['nom']);
        $prenom = trim($_GET['prenom']);
        $groupe = trim($_GET['groupe']);

        if (!empty($nom) && !empty($prenom) && !empty($groupe)) {
            $nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenomSecurise = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupeSecurise = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

            echo "<p>Bienvenue $prenomSecurise $nomSecurise, vous appartenez au groupe $groupeSecurise.</p>";
        } else {
            echo "<p>Erreur : tous les champs doivent être remplis.</p>";
        }
    } else {
        echo "<p>Veuillez soumettre le <a href='ex10_get.html'>formulaire GET</a> pour voir un résultat.</p>";
    }
    ?>
</body>
</html>