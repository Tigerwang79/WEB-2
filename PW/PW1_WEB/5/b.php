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

        <h1>exo 5, question b : protection SQL</h1>
        
        <h2>addshlashes</h2>
        <p>
            <?php
                $s = "foie\"foi'fois\\foix";   // i.e : foie"foi'fois\foix
                $r = addslashes($s);
                echo 'avant : -&gt;' . $s . '&lt-' . CR;
                echo 'après : -&gt;' . $r . '&lt-' . CR;
            ?>
        </p>

        <h2>stripshlashes</h2>
        <p>
            <?php
                $s = "a\"b'c\\A\\\"B\\'C\\\\D";   // i.e. : a"b'c\A\"B\'C\\D
                $r = stripslashes($s);
                echo 'avant : -&gt;' . $s . '&lt-' . CR;
                echo 'après : -&gt;' . $r . '&lt-' . CR;
            ?>
        </p>

    </body>
</html>

