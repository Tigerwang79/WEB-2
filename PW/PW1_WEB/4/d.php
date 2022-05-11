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

        <h1>exo 4, question d : retour multiple</h1>

        <p>
            <?php
                echo '<h2>retour d\'un tableau</h2>';
                
                function f4d_1($v = 0)
                {
                   return array($v+1, $v+2, $v+3);
                }
                
                unset($a);
                unset($b);
                unset($c);
                list($a, $b, $c) = f4d_1();
                echo '$a, $b, $c valent : ' . $a . ', ' . $b . ', ' . $c . CR;
                list($a, $b, $c) = f4d_1(5);
                echo '$a, $b, $c valent : ' . $a . ', ' . $b . ', ' . $c . CR;
            ?>
        </p>

   </body>
</html>
