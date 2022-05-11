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

        <h1>exo 4, question g : <code>function_exists</code> et <code>get_defined_functions</code></h1>

        <p>
            <?php

                function f4g_1($n)
                {
                   if ($n == 0)
                      return 1;
                   else
                      return $n * f4f_1($n-1);
                }
                
                foreach (array('f4g_1', 'f4g_2') as $funcName)
                {
                    if (function_exists($funcName))
                        echo '<p>la fonction "' . $funcName . '" existe.</p>';
                    else
                        echo '<p>la fonction "' . $funcName . '" n\'existe pas.</p>';
                }

                unset($a);
                $a = get_defined_functions();
                echo '<pre>';
                print_r($a);
                echo '</pre>';
            ?>
        </p>
   </body>
</html>
