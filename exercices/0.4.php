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
      <p>À partir d'une variable <b>height</b><br /></p>
        <p>
          Faire une condition qui permet de vérifier <mark>si la personne a + de 18
          ans et mesure + de 140 </mark>, <br> dans ce cas : <b> Afficher dans la console : "Je
          peux rentrer dans le manège"</b><br> Sinon <b>afficher dans la console : "Je n'ai
          pas le droit de rentrer dans le manège"</b>
        </p>
      </section>

        <section class="center-container">
        <p>
          J'ai utilisé les structures conditionnelles
          <mark>if</mark> et
          <mark>else</mark>

          pour vérifier si <mark>$âge</mark> est <mark>>= à 18)</mark> ans ainsi
          que la taille.
        </p>

        <p>
          L'opérateur logique <mark><strong>(&&)</strong></mark> m'a permis de
          combiner si les conditions pour produire<br />
          un résultat vrai <mark>(true)</mark> ou faux <mark>(false)</mark>
        </p>
      </section>

      <section class="center-exos-container">
        <h3> Résultat Obtenu</h3>
<!-- Résultat obtenu en php pour l'exercice 0.4 : -->
        <?php
        $age = 38;
        $height = 160;

        if($age >= 18 && $height >= 140){
          echo "Je peux rentrer dans le manège !";
        }else echo "Je n'ai pas le droit de rentrer dans le manège";
        ?>

      </section>

      <section class="button-container">
        <a class="btn-grad" href="/index.php">Retour</a>
      </section>
    </main>
  </body>
</html>