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

        <h1>exo 4, question e : récursivité</h1>

        <p>
            <?php
                echo '<h2>factorielle</h2>';

                function f4e_1($n)
                {
                   if ($n == 0)
                      return 1;
                   else
                      return $n * f4e_1($n-1);
                }

                unset($a);
                $a = f4e_1(6);
                echo '$a vaut : ' . $a . CR;
            ?>
        </p>

   </body>
</html>
