<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Les paramètres d'URL, exercice 2</title>
    </head>
    <!-- Faire une page index.php. Tester sur cette page que le paramètre age existe, 
    et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean -->
    <body>
        <?php
        if (isset($_GET['age']) && isset($_GET['lastname']) && isset($_GET['firstname'])) {
            echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ', vous avez ' . $_GET['age'] . ' ans !';
        } else {
            echo 'Merci de renseigner tous les paramètres !';
        }
        ?>
    </body>
</html>