<?php
require_once("../Acuueil/menu.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf_file'])) {
    $file_name = $_FILES['pdf_file']['name'];
    $file_tmp = $_FILES['pdf_file']['tmp_name'];

    // Lire le contenu du fichier PDF
    $file_data = file_get_contents($file_tmp);

    // Connexion à la base de données
    require_once("../PHP/connexion-Data-Base.php");

    // Préparez une requête pour insérer le fichier dans la base de données
    $sql = "INSERT INTO pdf_files (file_name, file_data) VALUES (:file_name, :file_data)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":file_name", $file_name, PDO::PARAM_STR);
    $stmt->bindParam(":file_data", $file_data, PDO::PARAM_LOB);

    // Exécutez la requête
    if ($stmt->execute()) {
        echo "Le fichier PDF a été téléchargé et enregistré avec succès dans la base de données.";

        // Affichez un lien pour voir le fichier PDF
        echo "<a href='viewpdf.php?id=" . $db->lastInsertId() . "'>Voir le fichier PDF</a>";
    } else {
        echo "Une erreur s'est produite lors de l'enregistrement du fichier PDF.";
    }
}
?>

<?php
require_once("../Acuueil/header.php");
?>
<form action="./addpdf.php" method="post" enctype="multipart/form-data">
  <input type="file" name="pdf_file" id="pdf_file" accept=".pdf">
  <input type="submit" value="Envoyer">
</form>