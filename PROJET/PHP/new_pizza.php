<?php 


// require_once("admin_only.php");
require_once("connexion-Data-Base.php");


 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  
  
  require_once("../PHP/img_param.php");

  if (isset($_POST["nom"]) && isset($_POST["options"]) && isset($_POST["prix"] ) && isset($_POST["description"]) && isset($_POST["photos"])) {
 // Expression régulière pour vérifier la longueur du mot de passe (au moins 8 caractères)
      $regexLongueur = '/^.{3,45}$/';    

      //CONTROL DE REGEX !:
      // Vérification de la longueur du nom
      if (!preg_match($regexLongueur, $_POST["nom"])) {
        echo "Le nom doit contenir au moins 8 caractères.<br>";
        exit();
      }

      if (!preg_match($regexLongueur, $_POST["options"])) {
        echo "Le nom doit contenir au moins 8 caractères.<br>";
        exit();
      }
      if (!preg_match($regexLongueur, $_POST["nom"])) {
        echo "Le nom doit contenir au moins 8 caractères.<br>";
        exit();
      }
      if (!preg_match($regexLongueur, $_POST["prix"])) {
        echo "Le nom doit contenir au moins 8 caractères.<br>";
        exit();
      }
      if (!preg_match($regexLongueur, $_POST["description"])) {
        echo "Le nom doit contenir au moins 8 caractères.<br>";
        exit();
      }

      if (!preg_match($regexLongueur, $_FILE["photos"]['name'])) {
        echo "Le nom doit contenir au moins 8 caractères.<br>";
        exit();
      }
      }
    
      $data = $_POST;
      $data["photos"] =  $img_save_name;

      $query = "INSERT INTO pizzas (";
      $query .= implode(", ", array_keys($data)); // Obtenir la liste des colonnes
      $query .= ") VALUES (";
      $query .= ":" . implode(", :", array_keys($data)); // Obtenir la liste des paramètres
      $query .= ")";
  
      $statement = $db->prepare($query);
  
      // Lier les paramètres
      foreach ($data as $key => $value) {
        $statement->bindValue(':' . $key, $value);
        // $statement->bindValue(':' . $key, strip_tags($value));
        // $statement->bindValue(':' . $key, htmlspecialchars($value));
        // $statement->bindValue(':' . $key, htmlentities($value));
      }
  
      // Exécuter la requête
      $statement->execute();

    }


?>