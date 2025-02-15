<?php include_once "../include/header.php" ?>

<head>
    <title> Exercice 0.1</title>

</head>

<body>
    <main>
      <section class="container">
        <h1>Exercice 0.1</h1>
      </section>

      <section class="center-exos-container">
        <p>
          À partir de deux variables (int) qui peuvent changer n'importe quand,
          créer une condition qui permet d'afficher dans la console le plus
          petit des deux nombres. 
        </p>
        <p><mark>si les nombres sont identiques</mark> => <strong>afficher : "C'est les mêmes !!"</strong></p>
        </p>
      </section>
        <section class="center-container">
        <p>
          J'ai utilisé les structures conditionnelles
          <mark>if</mark>,
          <mark>else if</mark>
          et
          <mark>else</mark>
          pour créer trois conditions qui comparent deux nombres.
        </p>
      </section>

      <section class="center-exos-container">
        <h3> Résultat Obtenu</h3>
<!-- Résultat obtenu en php pour l'exercice 0.1 : -->
        <?php
        $number_1 = 25;
        $number_2 = 2;

        if($number_1 < $number_2){
            echo "Le plus petit nombre est : $number_1";
        }elseif ($number_1 > $number_2){
            echo "Le plus petit nombre est : <b>$number_2</b>";
        }else{
            echo "c'est les mêmes !! (identiques)";
        }     
        ?>

      </section>

      <section class="button-container">
        <a class="btn-grad" href="/index.php">Retour</a>
      </section>
    </main>
  </body>
</html>