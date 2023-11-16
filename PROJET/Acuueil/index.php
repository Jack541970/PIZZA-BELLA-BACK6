<?php 
require_once("header.php");
?>

<?php 
@session_start();
?>

<!-- HEADER : LE MENU DE MA PAGE -->
<?php 
require_once("../Acuueil/menu.php");
?>

<div id="bgaccueil">
  <img id="acc-bg" src="../RESSOURCES/bg2.jpg" alt="Logo La Bella🍕">
</div>

<!-- PROPOTIONS -->

<div class="container-promo">
  <p class="titre1 pos11">Promotion</p>

  <!-- PROM O1 -->
  <div class="promoVert promojs">
    <div class="Imgpromo1">
      <img id="imgpro1" src="../RESSOURCES/pro1.jpg" alt="image pizza">
    </div>
    <div class="txtpromo1">
      <p class="jours posjj">Les mardis</p>
      <p class="promotexte pospp">Ne manquez pas notre promotion <br> pizza à moitié prix !</p>
      <p class="prix posprr"><strong>7.00€</strong></p>

    </div>

  </div>
  <!-- PROM O2 -->

  <div class="PromoRouge promojs">
    <div class="Imgpromo2">
      <img id="imgpro2" src="../RESSOURCES/Pro2.jpg" alt="image pizza double">
    </div>
    <div class="txtpromo2">
      <p class="jours posj">Les vendredis</p>
      <p class="promotexte posp">3 pizzas Maxi achetées</p>
      <p class="prix pospr">La 3ème à <span>3.00€</span></p>
    </div>

  </div>
</div>

<button class="buttonpro buttposs">Commander</button>
<button class="buttonproun buttpos">Commander</button>

<!-- NOS PIZZA -->
<div class="containerNospizzas">
  <p class="nosPizza" id="tnpizz">Nos Pizza >>></p>
  <div class="container-nav2 ">
    <!-- MENU -->
    <button class="b btnch">Base tomate</button>
    <button class="b btnch">Base creme fraiche</button>
    <button class="b btnch">Base chocolat</button>
  </div>
</div>

<?php
    // <!-- Articles -->
    require_once("../PHP/tuiles.php");
  ?>

<!-- FOOTER : LE PIED DE PAGE -->
<footer>

  <!-- ------------------------------------LA CARTE -->
  <?php
    // <!-- Articles -->
    require_once("../Acuueil/laCarte.php");
    require_once("../PHP/formulaireDeContact.php");

  ?>
  <!-- CAROUSEL -->





  <!-- fORMULAIRE -->



  <!--LE PIED DE PAGE -->
  <div id="SocialMedia">

    <!-- Carte de fidelité -->
    <div id="cdf">
      <article class="Lacdf">
        <div class="backbtnc">
          <a class="btncdf" href="">Carte de fidélité disponible</a>
        </div>
      </article>
    </div>

    <!-- MAPS -->
    <article>
      <div class="maps">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2931.2086861525354!2d1.4062763729617191!3d38.88952874121661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12994550e186d8d7%3A0x75cdf6d8bdfc6e4e!2sBaloo%20Ibiza!5e0!3m2!1sfr!2sfr!4v1685970551938!5m2!1sfr!2sfr"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

  </div>
  </article>
</footer>

<!-- fORMULAIRE -->
<?php
    require_once("../PHP/formulaireDeContact.php");
    ?>

<!--LE PIED DE PAGE -->
<div id="SocialMedia">
  <a href="#" target="_blank" class="Snap"></a>
  <a href="#" target="_blank" class="Tweet"></a>
  <a href="#" target="_blank" class="YT"></a>
  <a href="www.facebook.com" target="_blank" class="Fb"></a>
  <!-- <a href="#" target="_blank" class="Insta"></a> -->
  <a href="#" target="_blank" class="Tiktok"></a>

</div>

<div id="end">
  <div class="ca">
    <p class="ttt"> <strong>LIENS UTILES</strong> </p>
    <p class="thinstxt">
      Mentions légales <br>
      Politique de cookies<br>
      Politique de données<br>
      Conditions Générales<br>
      Copyright </p>

    <a href="#" target="_blank" class="Snap"></a>
    <a href="#" target="_blank" class="Tweet"></a>
    <a href="#" target="_blank" class="YT"></a>
    <a href="www.facebook.com" target="_blank" class="Fb"></a>
    <a href="#" target="_blank" class="Insta"></a>
    <a href="#" target="_blank" class="Tiktok"></a>
  </div>

  <div class="cb">
    <p class="ttt"> <strong>HORAIRES D'OUVERTURE</strong> </p>
    <p class="thinstxt">Du dimanche au jeudi<br>
      de 11h à 14h et de 18h à 23h.<br>
      et du vendredi au samedi<br>
      de 18h à 00h.</p>
  </div>


  </body>

  </html>