<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement POST</title>
</head>
<body>
    <?php
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $groupe = trim($_POST['groupe']);

        if (!empty($nom) && !empty($prenom) && !empty($groupe)) {
            $nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenomSecurise = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupeSecurise = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

            echo "<p>Bienvenue $prenomSecurise $nomSecurise, vous appartenez au groupe $groupeSecurise.</p>";
        } else {
            echo "<p>Erreur : tous les champs doivent être remplis.</p>";
        }
    } else {
        echo "<p>Veuillez soumettre le <a href='ex10_post.html'>formulaire POST</a> pour voir un résultat.</p>";
    }
    ?>
</body>
</html>