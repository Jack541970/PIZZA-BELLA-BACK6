<?php 
require_once("../Acuueil/header.php");

require_once("../Acuueil/menu.php");
?>


    <form method="post" action="update_utilisateur.php">

      <div>
        <label for="id">id</label>
        <input type="number" name="id" id="id" required>
      </div>

      <div>
        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom" required>
      </div>

      <div>
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom" required>
      </div>

      <div>
        <label for="Email">mail</label>
        <input type="text" name="Email" id="Email" required>
      </div>

      <div>
        <label for="password">pass</label>
        <input type="password" name="password" id="password" required>
      </div>

      <div>
        <button type="submit">Enregistrer</button>
      </div>

    </form>
  </body>
</html>