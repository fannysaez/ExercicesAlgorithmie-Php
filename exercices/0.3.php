<?php include_once "../include/header.php" ?>

<head>
<title>Exercices 0.3</title>

</head>

<body>
    <main>
      <section class="container">
      <h1>Exercices 0.3</h1>
      </section>

      <section class="center-exos-container">
      <p>
          À partir de 3 variables : <mark><b>$gender , $height , $age</b></mark><br>
        
          En fonction du genre afficher la phrase :<br>
          J'ai {x} ans, je mesure {x} centimètres et suis un homme<br>
          J'ai {x} ans, je mesure {x} centimètres et suis une femme
        </p>
      </section>

        <section class="center-container">
        <p>
          J'ai utilisé les structures conditionnelles
          <mark>if</mark> et
          <mark>else if</mark><br>

          Pour créer deux conditions qui comparent des valeurs afin de vérifer les variables<br>
          Le résultat que j'obtiendrais m'affichera les <mark><b>messages</b></mark>.
        </p>
      </section>

      <section class="center-exos-container">
        <h3> Résultat Obtenu</h3>
<!-- Résultat obtenu en php pour l'exercice 0.3 : -->
        <?php
        $gender = "female";
        $height = 160;
        $age = 38;

        if($gender === "male"){
            echo "J'ai $age ans, je mesure $height centimètres et je suis un homme !";
        }elseif($gender === "female"){
            echo "J'ai $age ans, je mesure $height centimètres et je suis une femme !";
        }
        ?>
      </section>

      <section class="button-container">
        <a class="btn-grad" href="/index.php">Retour</a>
      </section>
    </main>
  </body>
</html>