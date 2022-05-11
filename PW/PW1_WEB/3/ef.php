<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 4</title>
    </head>
    <body>

        <h1>exo 3, question e, tableaux indicés par des nombres</h1>

        <p>
            <?php
                function afficheTableau($t)
                {
                   echo '<pre>' . print_r($t, true) . '</pre>';
                }

                function afficheTableauBis($t)
                {
                   echo '<table border="4">';
                   for ($i = 0; $i < count($t); $i ++)
                   {
                      echo '<tr><td>' . $i . '</td><td>' . $t[$i] . '</td></tr>';
                   }
                   echo '</table>';
                }

                function afficheTableauTer($t)
                {
                   echo '<table border="4">';
                   foreach ($t as $cle => $val)
                   {
                      echo '<tr><td>' . $cle . '</td><td>' . $val . '</td></tr>';
                   }
                   echo '</table>';
                }

                echo '<h2>3 éléments sans préciser les numéros de cases</h2>';
                $villes = array('paris', 'londres', 'madrid');
                afficheTableau($villes);
                afficheTableauBis($villes);
                afficheTableauTer($villes);

                echo '<h2>on en ajoute 2 sans préciser les numéros de cases</h2>';
                $villes[] = 123;
                $villes[] = true;
                afficheTableauBis($villes);

                echo '<h2>on supprime une case au milieu et la dernière</h2>';
                unset($villes[1]);
                unset($villes[4]);
                afficheTableau($villes);
                afficheTableauBis($villes);   //plante l'affichage
                afficheTableauTer($villes);

                echo '<h2>et on en ajoute une sans numéro</h2>';
                $villes[] = 'mexico';
                afficheTableauTer($villes);

                echo '<h2>et on en ajoute une en position 10</h2>';
                $villes[10] = 'tunis';
                afficheTableauTer($villes);

                echo '<h2>on réindexe</h2>';
                $villes2 = array_values($villes);
                afficheTableauTer($villes2);

                echo '<h2>on récupère les clés</h2>';
                $villes2 = array_keys($villes);
                afficheTableauTer($villes2);
            ?>
        </p>

        <h1>exo 3, question f, tableaux associatifs</h1>

        <p>
            <?php
                echo '<h2>on ajoute 2 éléments indicés par des chaînes</h2>';
                $villes["Italie"] = 'rome';
                $villes["Allemagne"] = 'berlin';
                afficheTableauTer($villes);

                echo '<h2>on réindexe</h2>';
                $villes2 = array_values($villes);
                afficheTableauTer($villes2);

                echo '<h2>on récupère les clés</h2>';
                $villes2 = array_keys($villes);
                afficheTableauTer($villes2);

                echo '<h2>nouveau tableau</h2>';
                $villes = array('France'     => 'Paris',
                                'Espagne'    => 'Madrid',
                                'Angleterre' => 'Londres');
                afficheTableauTer($villes);

                echo '<h2>par str_replace</h2>';
                $s = "Pencroff et Ayrton procédèrent donc aux préparatifs du lancement";
                $t = str_replace(' ', '/', $s, $nombre);
                echo 'il y a ' . $nombre . ' espaces ' . CR;
                echo 'avant : ' . $s . CR;
                echo 'après : ' . $t . CR;

                echo '<h2>par explode/implode</h2>';
                $tmp = explode(' ', $s);
                $t = implode('\\', $tmp);
                echo 'il y a ' . (count($tmp) - 1) . ' espaces ' . CR;
                echo 'avant : ' . $s . CR;
                echo 'après : ' . $t . CR;
            ?>
        </p>
    </body>
</html>

