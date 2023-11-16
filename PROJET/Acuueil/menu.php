<!-- HEADER : LE MENU DE MA PAGE -->
<header id="navbar" class="header headeranim">
  <div id="pop" class="menudeux">
    <li class="nav-link">
      <a class="Acc" href="./Accueil/Accueil.html">> Inscription </a>
    </li>
    <li class="nav-link ">
      <a class="lac" href="../PHP/connexion.php">> Connexion </a>
    </li>
    <li class="nav-link">
      <a href="../PHP/deconnexion.php">> Déconnexion </a>
    </li>

    <?php if (isset($_SESSION['user']) && intval($_SESSION['user']['role']) === 1): ?>

    <li class="nav-link">
      <a href="../PHP/ajouter_pizza.php">> Ajouter une pizza </a>
    </li>
    <li class="nav-link">
      <a href="./Contacts/Contacts.html">> Modifier une pizza </a>
    </li>
    <li class="nav-link">
      <a href="../PHP/del_pizza.php">> Suprimer une pizza </a>
    </li>
    <li class="nav-link">
      <a href="../PHP/form.php">> Ajouter un utilisateur </a>
    </li>
    <li class="nav-link">
      <a href="../PHP/form_update_user.php">> Modifier un utilisateur </a>
    </li>
    <li class="nav-link">
      <a href="../PHP/del_user.php">> Supprimer un utilisateur </a>
    </li>
    <?php endif; ?>

  </div>
  <img class="navbar-brand" id="Logo" src="../RESSOURCES/Logo/La Bella.png" alt="Logo La Bella🍕">

  <nav class="navbar navbar-expand-lg">
    <ul class="nav-list">
      <!-- <li class="nav-link">
        <a class="Acc" href="./Accueil/Accueil.html">Accueil</a>
      </li> -->
      <li class="nav-link ">
        <a class="lac" href="./Lacarte/Carte.html">La carte</a>
      </li>
      <li class="nav-link">
        <a href="./Contacts/Contacts.html">Contact</a>
      </li>
      <li class="nav-link">
        <a href="#">0769853127</a>
      </li>
    </ul>

    <a id="burger" href="#">
      <div class="menu-wrapper">
        <div class="burger-icon">
          <div class="line"></div>
          <div class="line un"></div>
          <div class="line deux"></div>
        </div>
      </div>
    </a>
  </nav>


</header>