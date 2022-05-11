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
    
        <h1>Avertissement</h1>
        <p>
            Il faut penser à faire des <code>unset</code> sur les variables
            si on les réutilise. Sinon il risque d'y avoir un comportement erroné.
        </p>

        <h1>exo 4, question c : valeurs par défaut</h1>

        <p>
            <?php
                echo '<h2>paramètre par valeur avec valeur par défaut</h2>';

                function carre_decalage($n, $d = 0)
                {
                   return $n*$n + $d;
                }

                unset($a);
                $a = carre_decalage(4);
                echo 'paramètre seul à 4 : ' . $a . CR;

                $a = carre_decalage(4,2);
                echo 'paramètre à 4, décalage à 2 : ' . $a . CR;
            ?>
        </p>

   </body>
</html>
