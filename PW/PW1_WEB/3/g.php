<?php
    // selon qu'on est en mode console ou en mode navigateur
    //define("CR", "\n");
    define("CR", '<br />');

    function boolStr($b)
    {
        if ($b)
            return 'true';
        else
            return 'false';
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 4</title>
    </head>
    <body>

        <h1>exo 3, question g, variables de variable</h1>
        <p>À éviter au maximum</p>
        <p>
            <?php
                $capitale_france = "Paris";
                $capitale_italie = "Rome";
                $capitale_espagne = "Madrid";
                $choix = "italie";
                echo "La capitale de " . $choix . " est " . ${'capitale_' . $choix} . CR;
                echo "Bon, un tableau associatif, indicé par les pays aurait été plus ";
                echo "intelligent, notamment les capitales seraient liées par le nom du tableau." . CR;
            ?>
        </p>

    </body>
</html>

