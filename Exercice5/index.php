<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les paramètres d'URL, exercice 5</title>
    </head>
    <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?week=12 -->
    <body>
        <?php
        if (isset($_GET['week'])) {
            echo 'Vous avez travaillé la semaine ' . $_GET['week'] . '.';
        } else {
            echo 'Merci de renseigner les paramètres !';
        }
        ?>
    </body>
</html>