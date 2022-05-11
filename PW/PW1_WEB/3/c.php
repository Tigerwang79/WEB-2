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

        <h1>exo 3, question c, existence de variables</h1>

        <p>
            <?php
                echo '<h2>$v n\'existe pas</h2>';
                echo 'Existe de $v (avec isset) : ' . boolStr(isset($v)) . CR;
                echo 'Est null de $v (avec is_null) : ' . boolStr(is_null($v)) . CR;
                echo '$v à NULL === : ' . boolStr($v === NULL) . CR;
                echo '$v à NULL == : ' . boolStr($v == NULL) . CR;
                echo 'Valeur de $v : ' . $v . CR;

                echo CR;
                echo '<h2>$v affectée</h2>';
                echo 'on affecte $v ' . CR;
                $v = 'toutou';
                echo 'Existe de $v (avec isset) : ' . boolStr(isset($v)) . CR;
                echo 'Est null de $v (avec is_null) : ' . boolStr(is_null($v)) . CR;
                echo '$v à NULL === : ' . boolStr($v === NULL) . CR;
                echo '$v à NULL == : ' . boolStr($v == NULL) . CR;
                echo 'Valeur de $v : ' . $v . CR;

                echo CR;
                echo '<h2>$v affectée à NULL</h2>';
                echo 'on met $v à NULL' . CR;
                $v = NULL;
                echo 'Existe de $v (avec isset) : ' . boolStr(isset($v)) . CR;
                echo 'Est null de $v (avec is_null) : ' . boolStr(is_null($v)) . CR;
                echo '$v à NULL === : ' . boolStr($v === NULL) . CR;
                echo '$v à NULL == : ' . boolStr($v == NULL) . CR;
                echo 'Valeur de $v : ' . $v . CR;

                echo CR;
                echo '<h2>$v affectée à la chaîne vide</h2>';
                echo 'on réaffecte $v à la chaîne vide' . CR;
                $v = '';
                echo 'Existe de $v (avec isset) : ' . boolStr(isset($v)) . CR;
                echo 'Est null de $v (avec is_null) : ' . boolStr(is_null($v)) . CR;
                echo '$v à NULL === : ' . boolStr($v === NULL) . CR;
                echo '$v à NULL == : ' . boolStr($v == NULL) . CR;
                echo 'Valeur de $v : ' . $v . CR;

                echo CR;
                echo '<h2>unset sur $v</h2>';
                echo 'on fait un unset sur $v' . CR;
                unset($v);
                echo 'Existe de $v (avec isset) : ' . boolStr(isset($v)) . CR;
                echo 'Est null de $v (avec is_null) : ' . boolStr(is_null($v)) . CR;
                echo '$v à NULL === : ' . boolStr($v === NULL) . CR;
                echo '$v à NULL == : ' . boolStr($v == NULL) . CR;
                echo 'Valeur de $v : ' . $v . CR;
                echo '$v n\'existe plus' . CR;
            ?>
        </p>

    </body>
</html>

