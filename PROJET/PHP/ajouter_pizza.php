<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="Stylesheet" href="../Acuueil/accueil.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<Script src="../Acuueil/accueil.js" defer></Script>
</head>

<?php require_once("../Acuueil/menu.php");?>

<body>
  
  <div class="form-container">
    <!-- <img id="bgAjouter" src="../RESSOURCES/ajouterbg.jpg" alt=""> -->

    <form class="ajouterpizzas" method="POST" action="new_pizza.php" enctype="multipart/form-data">


      <div>
        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom" required>
      </div>

      <div>
        <label for="options">options</label>
        <input type="text" name="options" id="options" required>
      </div>

      <div>
        <label for="prix">prix</label>
        <input type="text" name="prix" id="prix" required>
      </div>

      <div>
        <label for="description">description</label>
        <input type="text" name="description" id="description" required>
      </div>

      <div>
        <label for="photos">photos</label>
        <input type="file" name="photos" id="photos" required>
      </div>

      <div>
        <button class="submit" type="submit">soummetre</button>
      </div>

    </form>
  </div>
</body>

</html>