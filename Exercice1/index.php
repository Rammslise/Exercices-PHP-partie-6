<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les paramètres d'URL, exercice 1</title>
    </head>
    <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
        index.php?lastname=Nemare&firstname=Jean -->
    <body>
        <?php
        //passer d'une page à une autre en récupérant les données URL.
        if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
            echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
        } else {
            echo 'Merci de vérifier les paramètres URL !';
        }
        ?>
    </body>
</html>
