<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les paramètres d'URL, exercice 4</title>
    </head>
    <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent,
    et les afficher: index.php?language=PHP&server=LAMP-->
    <body>
        <?php
        if (isset($_GET['language']) && isset($_GET['server'])) {
            echo 'Vous utilisez ' . $_GET['language'] . ', avec comme serveur ' . $_GET['server'] . '.';
        } else {
            echo 'Merci de renseigner les paramètres !';
        }
        ?>
    </body>
</html>