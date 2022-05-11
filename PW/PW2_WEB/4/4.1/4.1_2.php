<?php
// à décommenter pour la dernière partie de la question
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 5</title>
    </head>
    <body>

        <h1>exo 4.1, deuxième page</h1>

        <p>
            <?php
                if (!isset($_SESSION))
                echo '$_SESSION n\'existe pas.<br />';
                else
                {
                    if (isset($_SESSION['nom']))
                        echo '$_SESSION[\'nom\'] vaut ' . $_SESSION['nom'] . '<br />';
                    else
                        echo '$_SESSION[\'nom\'] n\'existe pas.<br />';
                    if (isset($_SESSION['age']))
                        echo '$_SESSION[\'age\'] vaut ' . $_SESSION['age'] . '<br />';
                    else
                        echo '$_SESSION[\'age\'] n\'existe pas.<br />';
                }
            ?>
        </p>

        <h2>SESSION</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_SESSION, true));
            echo '</pre>';
        ?>

        <h2>COOKIE</h2>
        <?php
            echo '<pre>';
            echo htmlspecialchars(print_r($_COOKIE, true));
            echo '</pre>';
        ?>

        <p>
            Retournez sur la <a href="4.1_1.php">page précédente</a>
        </p>
    </body>
</html>
