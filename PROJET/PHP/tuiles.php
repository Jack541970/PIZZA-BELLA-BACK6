<?php 
  require_once("connexion-Data-Base.php");

  $sql = "SELECT * FROM pizzas";
  //querry : execute la requette avec un resultat de retours
  $result = $db-> query($sql);
  //seclectionne les articiles
  $articles = $result -> fetchAll();

?>

<?php
require_once("../Acuueil/header.php");

?>
<!-- <div class="wrapper"> -->
<section id="possibliities">
  <div class="wrapper">

    <?php foreach ($articles as $article): ?>
    <article class="ChoixPizza"
      style="background-image: url(../RESSOURCES/<?= $article['photos'] ?>); background-repeat: no-repeat; background-position: 0 -65px;">
      <div class="overlay">


      </div>
      <p class="Npizz"><?= $article['nom'] ?></p>
      <p class="txtpiuzz"><?= $article['description'] ?></p>
      <p class="prixpuizz"><?= $article['prix']."$" ?></p>
      <a class="btnpuz" href="#">Commander</a>
    </article>
    <?php endforeach; ?>

  </div>
</section>

</body>

</html>
<!-- </div> -->