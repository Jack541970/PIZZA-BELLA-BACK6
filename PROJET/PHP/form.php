<?php
require_once("../Acuueil/header.php");
?>

<form id="formu" class="inscription" method="post" action="add_user.php">
  <div>
    <label for="nom"></label>
    <input type="text" name="nom" id="nom" value="John" required>
  </div>

  <div>
    <label for="prenom"></label>
    <input type="text" name="prenom" id="prenom" value="John" required>
  </div>

  <div>
    <label for="Email"></label>
    <input type="text" name="Email" id="Email" value="Johnyy@gmail.com" required>
  </div>

  <div>
    <label for="password"></label>
    <input type="password" name="password" id="password" value="pass123*" required>
  </div>

  <div>
    <label for="verify_password"></label>
    <input type="password" name="verify_password" id="verify_password" value="pass123*" placeholder="verify password"
      required>
  </div>

  <div>
    <label for="image"></label>
    <input type="file" name="photo" id="photo" required>
  </div>

  <div>
    <button type="submit">Enregistrer</button>
  </div>

</form>

</body>

</html>