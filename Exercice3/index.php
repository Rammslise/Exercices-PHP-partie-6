<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les paramètres d'URL, exercice 3</title>
    </head>
    <!-- Faire une page index.php. 
    Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016-->
    <body>
        <?php
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
            echo 'Vous avez commencer le ' . $_GET['startDate'] . ' et fini le ' . $_GET['endDate'] . '.';
        } else {
            echo 'Merci de renseigner les paramètres !';
        }
        ?>
    </body>
</html>