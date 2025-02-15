<?php include_once "../include/header.php" ?>

<head>
<title>Exercices 0.2</title>

</head>

<body>
    <main>
      <section class="container">
      <h1>Exercices 0.2</h1>
      </section>

      <section class="center-exos-container">
        <<p>
          A partir d'une variable <mark>$genre</mark> qui peux être soit <mark><b>"male"</b></mark> ou <mark><b>"female"</b></mark>
          Faire une condition qui va afficher :<br>
          "Je suis un homme" OU "je suis une femme"
        </p>
      </section>

        <section class="center-container">
        <p>
          J'ai utilisé les structures conditionnelles
          <mark>if</mark> et
          <mark>else if</mark><br>

          Pour créer deux conditions qui comparent des chaînes de caractères afin de vérifer la valeur de la variable<br>
          Le résultat que j'obtiendrais m'affichera "Si la personne est un homme ou une femme".
        </p>
      </section>

      <section class="center-exos-container">
        <h3> Résultat Obtenu</h3>
<!-- Résultat obtenu en php pour l'exercice 0.2 : -->
        <?php
        $gender = "female";

        if($gender === "male"){
            echo "Je suis un homme !";
        }elseif ($gender === "female"){
            echo "Je suis une femme !";
        }
        ?>

      </section>

      <section class="button-container">
        <a class="btn-grad" href="/index.php">Retour</a>
      </section>
    </main>
  </body>
</html>