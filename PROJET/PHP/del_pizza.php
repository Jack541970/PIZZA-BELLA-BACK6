<?php 
require_once("../Acuueil/header.php");
?>
<form action="del_pizza.php" method="post">
  <label for="id">ID de la pizza à supprimer :</label>
  <input type="number" name="id" id="id" required>
  <button type="submit">Supprimer</button>
</form>
</body>

</html>


<?php 
    // require_once("admin_only.php");
    require_once("../PHP/connexion-Data-Base.php");


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   
        $id = $_POST["id"];
        
        $query = "DELETE FROM pizzas WHERE id = :id";

        // Préparation de la requête
        $req = $db->prepare($query);

        // Liaison du paramètre ID
        $req->bindParam("id", $id);
        $req->execute();

        // Exécution de la requête
        if($req->rowCount()){
            echo "L'utilisateur avec l'ID $id a été supprimé avec succès.";
            http_response_code(200);
        }
        else
        {
            echo "Erreur de suppression";
            http_response_code(404);
        }    exit();


    }

?>