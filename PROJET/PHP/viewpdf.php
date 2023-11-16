<?php
require_once("../Acuueil/menu.php");

// Connexion à la base de données
require_once("../PHP/connexion-Data-Base.php");


// Vérifiez si un identifiant de fichier PDF a été passé dans la requête
if (isset($_GET['id'])) {
    $file_id = $_GET['id'];

    // Connexion à la base de données
    //require_once("../PHP/connexion-Data-Base.php");

    // Récupérez les informations du fichier PDF à partir de la base de données
    $sql = "SELECT file_name, file_data FROM pdf_files WHERE id = :file_id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":file_id", $file_id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifiez si le fichier PDF a été trouvé
    if ($result) {
        $file_name = $result['file_name'];
        $file_data = $result['file_data'];

        // Affichez le nom du fichier
        echo "<h2>$file_name</h2>";

        // Affichez le contenu du fichier PDF
        header("Content-type: application/pdf");
        echo $file_data;
    } else {
        echo "Fichier PDF non trouvé dans la base de données.";
    }
} else {
    echo "ID de fichier PDF manquant dans la requête.";
}

require_once("../Acuueil/header.php");
?>