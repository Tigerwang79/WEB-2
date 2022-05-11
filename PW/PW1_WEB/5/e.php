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

        <h1>exo 5, question e : hashage</h1>

        <?php
            $not_encoded = "toto";
            echo "<h2>Not encoded</h2>\n";
            echo "<p>" . $not_encoded . "</p>";

            echo '<table border="1">';
            echo '<tr><th>crypt</th><td>' . crypt($not_encoded, 'salt') . '</td><td>salt : "salt"</td></tr>';
            echo '<tr><th>crypt</th><td>' . crypt($not_encoded, 'pepper') . '</td><td>salt : "pepper"</td></tr>';
            echo '<tr><th>md5</th><td>' . md5($not_encoded) . '</td></tr>';
            echo '<tr><th>sha1</th><td>' . sha1($not_encoded) . '</td></tr>';
            echo '<tr><th>password_hash</th><td>' . password_hash($not_encoded, PASSWORD_DEFAULT) . '</td><td>PASSWORD_DEFAULT</td></tr>';
            echo '<tr><th>password_hash</th><td>' . password_hash($not_encoded, PASSWORD_BCRYPT) . '</td><td>PASSWORD_BCRYPT</td></tr>';
            echo '<tr><th>password_hash</th><td>' . password_hash($not_encoded, PASSWORD_ARGON2I) . '</td><td>PASSWORD_ARGON2I (php 7.2)</td></tr>';
            echo '<tr><th>password_hash</th><td>' . password_hash($not_encoded, PASSWORD_ARGON2ID) . '</td><td>PASSWORD_ARGON2ID (php 7.3)</td></tr>';
            echo '</table>';
        ?>

        <h2>Fonctions inverses</h2>
        <p>Elles n'existent pas.</p>
    </body>
</html>

