<?php 

require_once("../PHP/connexion-Data-Base.php");
require_once("../Acuueil/menu.php");


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['email'])  && isset($_POST['password'])) {
             
             

              // Vérification de l'email
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    echo ("Entrer un email correct");
                    exit();
                }

                $sql = "SELECT * FROM users WHERE email =:email";
                $req = $db->prepare($sql);
                $req->bindParam("email",$_POST['email']);
                $req->execute();

                $usr = $req->fetch();

                // SI USR DANS LE IF EST FALASE IL YA UNE ERREUR
                //password_verify PERMET DE VERIFIER LE HACHAGE IL VERIFIE LEMPRINTE DU MOT DE PASS HACHé
                if($usr && password_verify($_POST['password'], $usr['password']))
                {
                    // echo "<pre>";
                    // var_dump($usr);
                    // echo "</pre>";

                    session_start();

                    // unset($usr['mdp']);

                    $_SESSION['user'] = $usr;
                    header("Location: ../Acuueil/index.php");


                    // Définir un cookie avec l'ID de l'utilisateur
                    setcookie('userID', $usr['id'], time() + (24 * 60 * 60));

                    exit();
                }
                else
                {
                    echo "Email ou/et mdp incorrecte";
                }
            }  
        }

       

    ?>
<?php
require_once("../Acuueil/header.php");
?>
<form id="formu" action="../PHP/connexion.php" class="connexion" method="post">

  <div id="">
    <label for="email"></label>
    <input type="text" name="email" id="email" placeholder="email" required>
  </div>

  <div>
    <label for="password"></label>
    <input type="password" name="password" id="password" placeholder="password" required>
  </div>

  <div>
    <button type="submit">soummetre</button>
  </div>

</form>


</body>

</html>