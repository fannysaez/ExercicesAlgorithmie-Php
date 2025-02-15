<?php include_once "../include/header.php" ?>

<head>
    <title>Exercices 0.4</title>

</head>

<body>
    <main>
        <section class="container">
            <h1>Exercices 0.4</h1>
        </section>

        <section class="center-exos-container">
            <p>
                Créer une <b>fonction</b> qui à partir d'un <b>tableau de chiffre</b> nous donne une <b>moyenne</b>.<br>
                Si aucune note n'est présente dans le tableau, la <mark>fonction va nous rendre <b>0</b></mark>.
            </p>
        </section>

        <section class="center-container">
            <p>
            J'ai crée une fonction nommée moyenne, qui prend un seul paramètre : <mark>$notes</mark>.
            Ce paramètre est un <mark><b>tableau de nombres (par exemple : [15, 18, 12, 10, 14])</b></mark>.<br>
            J'ai utilisé une condition <mark><b>if</b></mark> afin de vérifier si le tableau est vide <mark><b>retourne 0</b></mark><br><br>

            J'ai également parcouru le tableau. <mark>$somme = array_sum($notes)</mark> <b> array_sum($notes) j'additionne tous les nombres du tableau.</b><br>
            Je compte combien de notes sont dans le tableau <mark><b>count($notes)</b></mark>. Exemples <mark>Si $notes = [15, 18, 12, 10, 14], alors count($notes) = 5.</mark><br>
            Je calcule la moyenne c'est à dire <mark><b>return $somme / $nombre</b></mark> je divise la somme des notes par le nombre de notes.<br>
            <mark><b>Si $somme = 69 et $nombre = 5 : 69 / 5 = 13.8.</b></mark><br><br>
            
            <b>La fonction retourne donc 13.8.</b>

            </p>
            <p>

                Résultat renvoi le <b>message</b> :

                La fonction <b>retourne la moyenne si le tableau contient des chiffres</b>
                Affichera la moyenne du tableau<br>

                Si la note n'est pas présente dans le tableau (vide), fonction <b>(retourne) 0</b>
                Affichera le message : 0
            </p>
        </section>

        <section class="center-exos-container">
            <h3> Résultat Obtenu</h3>
            <!-- Résultat obtenu en php pour l'exercice 0.4 : -->
            <?php
            function moyenne($notes)
            {
                if (count($notes) == 0) {
                    return 0;
                }

                $somme = array_sum($notes);
                $nombre = count($notes);

                return $somme / $nombre;
            }

            // Exemple d'utilisation
            $notes = [15, 18, 12, 10, 14];
            echo "Moyenne : " . moyenne($notes);
            ?>


        </section>

        <section class="button-container">
            <a class="btn-grad" href="/index.php">Retour</a>
        </section>
    </main>
</body>

</html>