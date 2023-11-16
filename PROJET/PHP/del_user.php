<?php 
require_once("../Acuueil/header.php");

require_once("../Acuueil/menu.php");
?>
<form action="del_user.php" method="POST">

  <label for="user  ">ID de l'utilisateur à supprimer :</label>
  <input type="number" name="id" id="id" required>
  <button type="submit">Supprimer</button>


    </form>
  </body>
</html>
<?php 
// require("admin_only.php");

require_once("connexion-Data-Base.php");


 if ($_SERVER['REQUEST_METHOD'] === 'POST') {


   
$id = $_POST["id"];

$query = "DELETE FROM users WHERE id = :id";

// Préparation de la requête
$req = $db->prepare($query);

// Liaison du paramètre ID
$req->bindParam("id", $id);
$req->execute();


// Exécution de la requête
    // Vérifie si la requête a retourné des résultats (l'utilisateur a été supprimé avec succès)
if($req->rowCount()){
    echo "L'utilisateur avec l'ID $id a été supprimé avec succès.";
        // Définit le code de réponse HTTP à 200 (OK), indiquant que la requête a été traitée avec succès.
    http_response_code(200);
}
else
{
    echo "Erreur de suppression";
    http_response_code(404);
}    exit();


}


?>