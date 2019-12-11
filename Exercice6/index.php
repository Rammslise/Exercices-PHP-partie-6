<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les paramètres d'URL, exercice 5</title>
    </head>
    <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?building=12&room=101 -->
    <body>
        <?php
        if (isset($_GET['building']) && isset($_GET['room'])) {
            echo 'Bienvenue, votre chambre se trouve au ' . $_GET['building'] . 'ème étage, à la ' . $_GET['room'] . '.';
        } else {
            echo 'Merci de renseigner les paramètres !';
        }
        ?>
    </body>
</html>
