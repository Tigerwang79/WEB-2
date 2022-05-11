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

        <h1>exo 5, question d : URL</h1>

        <?php
            $not_encoded = "bébé et bébête";
            echo "<h2>Not encoded</h2>\n";
            echo "<p>" . $not_encoded . "</p>";

            $encoded = urlencode($not_encoded);
            echo "<h2>urlencode</h2>\n";
            echo "<p>" . $encoded . "</p>";

            $encoded = rawurlencode($not_encoded);
            echo "<h2>rawurlencode</h2>\n";
            echo "<p>" . $encoded . "</p>";
        ?>

        <h2><code>urldecode</code> et <code>rawurldecode</code></h2>
        <p>Ces fonctions font la transformation inverse.</p>

    </body>
</html>

