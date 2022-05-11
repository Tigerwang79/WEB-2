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

        <h1>exo 5, question c : entités HTML</h1>

        <?php
            $not_encoded = "Un aspect <strong>important</strong> de \"ça\" est le 'mors'";
            echo "<h2>Not encoded</h2>\n";
            echo "<p>" . $not_encoded . "</p>";


            $encoded = htmlentities($not_encoded);
            echo "<h2>Encoded (htmlentities sans ENT_QUOTES)</h2>\n";
            echo "<p>" . $encoded . "</p>";

            echo "<h2>Encoded (htmlentities deux fois sans ENT_QUOTES)</h2>\n";
            echo "<p>" . htmlentities($encoded) . "</p>";


            $encoded = htmlentities($not_encoded, ENT_QUOTES);
            echo "<h2>Encoded (htmlentities avec ENT_QUOTES)</h2>\n";
            echo "<p>" . $encoded . "</p>";

            echo "<h2>Encoded (htmlentities deux fois avec ENT_QUOTES)</h2>\n";
            echo "<p>" . htmlentities($encoded, ENT_QUOTES) . "</p>";


            $encoded = htmlspecialchars($not_encoded, ENT_QUOTES);
            echo "<h2>Encoded (htmlspecialchars avec ENT_QUOTES)</h2>\n";
            echo "<p>" . $encoded . "</p>";

            echo "<h2>Encoded (htmlspecialchars deux fois avec ENT_QUOTES)</h2>\n";
            echo "<p>" . htmlspecialchars($encoded, ENT_QUOTES) . "</p>";
        ?>

        <h2><code>htmlspecialchars_decode</code> et <code>html_entity_decode</code></h2>
        <p>Ces fonctions font la transformation inverse.</p>

    </body>
</html>

