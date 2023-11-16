<?php
require_once("../Acuueil/menu.php");

// Connexion à la base de données
require_once("../PHP/connexion-Data-Base.php");

// Récupérer tous les fichiers PDF depuis la base de données
$sql = "SELECT id, file_name FROM pdf_files";
$result = $db->query($sql);

if ($result->rowCount() > 0) {
    echo "<h1>Liste de tous les fichiers PDF</h1>";
    echo "<ul>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $file_id = $row['id'];
        $file_name = $row['file_name'];
        echo "<li><a href='viewpdf.php?id=$file_id'>$file_name</a></li>";
    }
    echo "</ul>";
} else {
    echo "Aucun fichier PDF trouvé dans la base de données.";
}

require_once("../Acuueil/header.php");
?>