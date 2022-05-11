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

        <h1>exo 5, question a : </h1>

        <h2>avec apostrophes</h2>
        <p>
            <?php
                $s = 'une ligne\n2 lignes\n3 lignes';
                $r = nl2br($s);
                echo 'avant : -&gt;' . $s . '&lt-' . CR;
                echo 'après : -&gt;' . $r . '&lt-' . CR;
                echo 'Les \n ne sont pas remplacés lorsqu\'ils sont entre apostrophes.';
            ?>
        </p>

        <h2>avec guillemets</h2>
        <p>
            <?php
                $s = "une ligne\n2 lignes\n3 lignes";
                $r = nl2br($s);
                echo 'avant : -&gt;' . $s . '&lt-' . CR;
                echo 'après : -&gt;' . $r . '&lt-' . CR;
            ?>
        </p>

        <h2>suppression des \n</h2>
        <p>
            <?php
                $s = "une ligne\n2 lignes\n3 lignes";
                $r = nl2br($s);
                $r = str_replace("\n", "", $r);
                echo 'avant : -&gt;' . $s . '&lt-' . CR;
                echo 'après : -&gt;' . $r . '&lt-' . CR;
            ?>
        </p>

        <h2>br2nl</h2>
        <p>
            <?php
                $s = 'une ligne<br />2 lignes<br />3 lignes';
                $r = str_replace("<br />", "\n", $s);
                echo 'avant : -&gt;' . $s . '&lt-' . CR;
                echo 'après : -&gt;' . $r . '&lt-' . CR;
            ?>
        </p>

        <h2>br2nl bis</h2>
        <p>
            <?php
                $s = 'une ligne<br />2 lignes<br/>3 lignes<br>4 lignes';
                $r = str_replace("<br />", "\n", $s);
                $r = str_replace("<br/>", "\n", $r);
                $r = str_replace("<br>", "\n", $r);
                echo 'avant : -&gt;' . $s . '&lt-' . CR;
                echo 'après : -&gt;' . $r . '&lt-' . CR;
            ?>
        </p>

        <h2>br2nl ter</h2>
        <p>
            <?php
                $s = 'une ligne<br />2 lignes<br/>3 lignes<br>4 lignes';
                $r = preg_replace("$<br ?/?>$", "\n", $s);
                echo 'avant : -&gt;' . $s . '&lt-' . CR;
                echo 'après : -&gt;' . $r . '&lt-' . CR;
            ?>
        </p>
    </body>
</html>

