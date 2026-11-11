<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "gestion_etudiants";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

if(isset($_POST['ajouter'])){
    $nom = $_POST['nom'];
    $filiere = $_POST['filiere'];
    $conn->query("INSERT INTO etudiants (nom, filiere) VALUES ('$nom', '$filiere')");
    header("Location: index.php");
}
?>
