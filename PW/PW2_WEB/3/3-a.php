<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>

        <h1>Exercice 3 : Variables super-globales</h1>

        <h2>Affichage de la variable : $_SERVER</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_SERVER, true));
            echo '</pre>';
        ?>

        <h2>Affichage de la variable : $_ENV</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_ENV, true));
            echo '</pre>';
        ?>

        <h2>Affichage de la variable : $_REQUEST</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_REQUEST, true));
            echo '</pre>';
        ?>

        <h2>Affichage de la variable : $_SESSION (avec un warning)</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_SESSION, true));
            echo '</pre>';
        ?>

        <h2>Affichage de la variable : $_COOKIE</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_COOKIE, true));
            echo '</pre>';
        ?>

        <h2>Affichage de la variable : $_POST</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_POST, true));
            echo '</pre>';
        ?>

        <h2>Affichage de la variable : $_GET</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_GET, true));
            echo '</pre>';
        ?>

        <h2>Affichage de la variable : $_FILES</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_FILES, true));
            echo '</pre>';
        ?>

        <h2>Affichage de la variable : $GLOBALS</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($GLOBALS, true));
            echo '</pre>';
        ?>

        <h2>phpinfo()</h2>
        <?php
            phpinfo();
        ?>
    </body>
</html>
