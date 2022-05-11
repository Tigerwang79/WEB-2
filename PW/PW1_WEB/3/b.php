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

        <h1>exo 3, question b, égalité ?</h1>

        <p>
            <?php
                if (1 == "miaou")
                   echo "il y a un problème (1 == \"miaou\") ?" . CR;
                if (0 == "miaou")
                   echo "il y a un problème (0 == \"miaou\") ?" . CR;

                function comparer($a, $b)
                {
                   echo "comparaison de ";
                   echo "(" . gettype($a) . " : " . $a . ")";
                   echo " et ";
                   echo "(" . gettype($b) . " : " . $b . ")" . CR;
                   echo "&nbsp;&nbsp;&nbsp; avec == " . boolStr($a == $b) . CR;
                   echo "&nbsp;&nbsp;&nbsp; avec === " . boolStr($a === $b) . CR;
                }

                $a = 123;
                $b = 123;
                comparer($a, $b);

                $a = 123;
                $b = "123";
                comparer($a, $b);

                $a = 123;
                $b = "miaou";
                comparer($a, $b);

                $a = 123;
                $b = "123miaou";
                comparer($a, $b);

                $a = 0;
                $b = "123miaou";
                comparer($a, $b);

                $a = 0;
                $b = "miaou";
                comparer($a, $b);

                $a = "123";
                $b = "123d0";
                comparer($a, $b);

                $a = "123";
                $b = "123e0";
                comparer($a, $b);
            ?>

            <br />
            <code>==</code> compare les valeurs et si on a un argument de type numérique
            et un autre de type chaîne, alors la chaîne est transformée en nombre.<br />
            <code>===</code> compare les valeurs et les types. Il faut que les deux
            concordent.<br />
        </p>

    </body>
</html>

