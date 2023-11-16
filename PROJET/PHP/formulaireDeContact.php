<?php

require_once("../PHP/connexion-Data-Base.php");
    
    // Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $data = $_POST;


  try {

    //verifier mot de pass

    if (isset($_POST["nom"])  && isset($_POST["Email"] ) && isset($_POST["sujet"]) && isset($_POST["text"])) {
     
      // Expression régulière pour vérifier la longueur du mot de passe (au moins 8 caractères)
      $regexLongueur = '/^.{3,45}$/';    
      $regexEmail = '/^.{3,200}$/';    
      $mess = '/^.{0,256}$/';    

      //CONTROL DE REGEX !:
      // Vérification de la longueur du nom
      if (!preg_match($regexLongueur, $_POST["nom"])) {
        echo "Le nom doit contenir au moins 8 caractères.<br>";
        exit();
      }

      // Vérification de la longueur du email
      if (!preg_match($regexLongueur, $_POST["mail"])) {
        echo "mail trop court.<br>";
        exit();
      }
           
      // Vmessage
      if (!preg_match($mess, $_POST["text"])) {
        echo "message trop long.<br>";
        exit();
      }

      //filter_var est utilisée pour vérifier si l'email est valide en utilisant le filtre FILTER_VALIDATE_EMAIL. Cette fonction a une validation intégrée spécifique aux adresses email et vérifie si la valeur passée correspond au format attendu d'une adresse email
      // Vérification de l'email
      if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        echo ("Entrer un email correct");
        exit();
      }
      
    } 
    else {
    
      echo " C'est une erreur";
      header("Location: index.php?msg=C'est une erreur");
    }

    //grace au insert into quon recupere la valeur entré par lutilisateur dans la BD
    // Préparer la requête d'insertion
    $query = "INSERT INTO message (";
    $query .= implode(", ", array_keys($data)); // Obtenir la liste des colonnes
    //implode : prendre un tab separe le par ";" et faire en chaine de carac
    //array key : retourne une chaine avec key
    $query .= ") VALUES (";
    $query .= ":" . implode(", :", array_keys($data)); // Obtenir la liste des paramètres
    $query .= ")";




    $statement = $db->prepare($query);

    // Lier les paramètres
    foreach ($data as $key => $value) {
      $statement->bindValue(':' . $key, $value);
    }

    // Exécuter la requête
    $statement->execute();

    // Rediriger vers une page de succès ou afficher un message de succès
    header("Location: index.php");
    exit();
  } 
  catch (PDOException $e) {
    // Gérer les erreurs de la base de données
    echo ("Erreur de la base de données : " . $e->getMessage());
    echo "Erreur de la base de données : " . $e->getMessage();
  }
  catch (Exception $e) {
    // Gérer les erreurs de la base de données
    echo ("Erreur de la base de données : " . $e->getMessage());
    echo "Erreur de la base de données : " . $e->getMessage();
  }
}
 ?>





<!-- fORMULAIRE -->
<form method="post" action="formulaireDeContact.php" id="formuilaire">


  <label for="Nom">
    <input class="in" type="text" name="nom" placeholder="Nom">
  </label>


  <label for="E-Mail">
    <input class="in" type="text" name="mail" placeholder="E-Mail">
  </label>


  <label for="Sujet">
    <input class="in" type="text" name="sujet" placeholder="Sujet">
  </label>

  <textarea name="text" id="" cols="30" rows="5"></textarea>
  <button id="Envoye">ENVOYER</button>
</form>