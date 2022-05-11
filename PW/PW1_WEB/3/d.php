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

        <h1>exo 3, question d, boucles</h1>

        <p>
            <?php
                echo '<h2>variables locales</h2>';
                for ($i = 0; $i < 10; $i ++)
                {
                   echo "ligne " . $i . " : ";
                   afficheLigne($i);
                }

                function afficheLigne($numLigne)
                {
                   for ($i = 0; $i < 10; $i ++)
                      echo $numLigne * $i . " ";
                   echo CR;
                }
                echo 'tout est correct, $i est bien local, ce qui n\'est pas le cas avec JavaScript.' . CR;

                echo '<h2>table de multiplication</h2>';
                echo '<table border="1">';
                for ($i = 0; $i < 10; $i ++)
                {
                   echo '<tr>';
                   echo "<td>ligne " . $i . " : </td>";
                   afficheLigneTable($i);
                   echo '</tr>';
                }
                echo '</table>';

                function afficheLigneTable($numLigne)
                {
                   for ($i = 0; $i < 10; $i ++)
                      echo '<td>' . $numLigne * $i . "</td>";
                   //echo CR;
                }

                echo CR;
                echo '<h2>variable globale</h2>';
                $i = "miaou";
                affichePasBon();
                afficheBon();
                function affichePasBon()
                {
                   echo "fonction incorrecte : " . $i . CR;
                }
                function afficheBon()
                {
                   global $i;
                   echo "fonction correcte : " . $i . CR;
                }
            ?>
        </p>
    </body>
</html>

