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

        <h1>exo 3, question a, opérateur +</h1>

        <p>
            <?php
                function somme($a, $b)
                {
                   return $a + $b;
                }

                $x = 123;
                $y = 654;
                echo $x . " + " . $y . " = " . somme($x, $y) . CR;

                echo 'Utiliser des <em>prompt</em> n\'a pas de sens car ils s\'exécutent ';
                echo "sur la machine du client, or le document n'a pas encore été envoyé." . CR;

                $x = "123";
                $y = "654";
                echo '"'.$x.'"' . " + " . '"'.$y.'"' . " = " . somme($x, $y) . CR;

                $x = 123;
                $y = "aaa";
                echo $x . " + " . '"'.$y.'"' . " = " . somme($x, $y) . CR;

                $x = 123;
                $y = "1aaa";
                echo $x . " + " . '"'.$y.'"' . " = " . somme($x, $y) . CR;

                $x = "aaa1";
                $y = 123;
                echo '"'.$x.'"' . " + " . $y . " = " . somme($x, $y) . CR;
                echo 'résultat normal car <em>x</em> est lu de gauche à droite.' . CR;

                $x = "aaa";
                $y = "bbb";
                echo '"'.$x.'"' . " + " . '"'.$y.'"' . " = " . somme($x, $y) . CR;
                echo 'résultat cohérent avec ce qui vient d\'être vu.' . CR;
            ?>
        </p>
    </body>
</html>

