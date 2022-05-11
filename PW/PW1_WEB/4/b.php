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


        <h1>exo 4, question b : passage de paramètres</h1>

        <p>
            <?php
                echo '<h2>paramètre par valeur</h2>';
                function f4b_1($v)
                {
                   $v ++;
                }
                unset($a);
                $a = 3;
                echo 'avant $a vaut : ' . $a . CR;
                f4b_1($a);
                echo 'après $a vaut : ' . $a . CR;
                echo '<p>Le passage par valeur travaille sur une copie</p>';

                echo CR;
                echo '<h2>paramètre par valeur de type tableau</h2>';
                function f4b_1bis($v)
                {
                   $v[1] = 'BBBB';
                }
                unset($a);
                $a = array('aa', 'bb', 'cc');
                echo 'avant $a vaut : ';
                echo '<pre>';
                print_r($a);
                echo '</pre>';
                f4b_1bis($a);
                echo 'après $a vaut : ';
                echo '<pre>';
                print_r($a);
                echo '</pre>';
                echo '<p>Le passage par valeur travaille sur une copie, y compris '
                   . 'pour les tableaux. Donc attention à l\'espace mémoire</p>';

                echo CR;
                echo '<h2>paramètre par référence</h2>';
                function f4b_2(&$v)
                {
                   $v ++;
                }
                unset($a);
                $a = 3;
                echo 'avant $a vaut : ' . $a . CR;
                f4b_2($a);
                echo 'après $a vaut : ' . $a . CR;
                //f4b_2(5);    // plantage
                echo '<p>Le passage par référence fonctionne comme attendu.' . CR
                   . 'On ne peut pas passer un nombre par référence.</p>';
            ?>
        </p>

   </body>
</html>
