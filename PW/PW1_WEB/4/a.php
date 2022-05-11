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

        <h1>exo 4, question a : référence</h1>

        <p>
            <?php
                echo '<h2>variable simple par valeur</h2>';
                unset($a);
                unset($b);
                $a = 3;
                $b = $a;
                echo 'avant $a et $b valent : ' . $a . ' et '. $b . CR;
                $b ++;
                echo 'après $a et $b valent : ' . $a . ' et '. $b . CR;
                echo '<p>$a et $b sont indépendantes</p>';

                echo CR;
                echo '<h2>variable simple par référence</h2>';
                unset($a);
                unset($b);
                $a = 3;
                $b = &$a;
                echo 'avant $a et $b valent : ' . $a . ' et '. $b . CR;
                $b ++;
                echo 'après $a et $b valent : ' . $a . ' et '. $b . CR;
                echo '<p>$a et $b sont les mêmes variables</p>';

                echo CR;
                echo '<h2>variable tableau par valeur</h2>';
                unset($a);
                unset($b);
                $a = array("aa", "bb", "cc");
                $b = $a;
                echo 'avant $a et $b valent : ';
                echo '<pre>';
                print_r($a);
                print_r($b);
                echo '</pre>';
                $b[1] = 'BB';
                echo 'après $a et $b valent : ';
                echo '<pre>';
                print_r($a);
                print_r($b);
                echo '</pre>';
                echo '<p>$a et $b sont indépendantes, l\'intégralité du tableau a été recopiée</p>';

                echo CR;
                echo '<h2>variable tableau par référence</h2>';
                unset($a);
                unset($b);
                $a = array("aa", "bb", "cc");
                $b = &$a;
                echo 'avant $a et $b valent : ';
                echo '<pre>';
                print_r($a);
                print_r($b);
                echo '</pre>';
                $b[1] = 'BBBB';
                echo 'après $a et $b valent : ';
                echo '<pre>';
                print_r($a);
                print_r($b);
                echo '</pre>';
                echo '<p>$a et $b sont les mêmes variables</p>';

                echo CR;
                echo '<h2>variable tableau par référence (bis)</h2>';
                unset($a);
                unset($b);
                $a = array("aa", "bb", "cc");
                $b = &$a;
                echo 'avant $a et $b valent : ';
                echo '<pre>';
                print_r($a);
                print_r($b);
                echo '</pre>';
                $b = array(1,2,3);
                echo 'après $a et $b valent : ';
                echo '<pre>';
                print_r($a);
                print_r($b);
                echo '</pre>';
                echo '<p>$a et $b sont les mêmes variables, donc que l\'on modifie '
                    . 'une case $b ou directement $b, alors $a est modifiée.</p>';
            ?>
        </p>

   </body>
</html>
