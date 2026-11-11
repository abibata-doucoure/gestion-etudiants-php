<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Gestion Étudiants - Abibata</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>🎓 Gestion des Étudiants - L3 IDA</h1>

<form method="POST">
<input type="text" name="nom" placeholder="Nom" required>
<input type="text" name="filiere" placeholder="Filière (IDA)" required>
<button type="submit" name="ajouter">Ajouter</button>
</form>

<h2>Liste des étudiants</h2>
<table>
<tr><th>ID</th><th>Nom</th><th>Filière</th></tr>
<?php
$result = $conn->query("SELECT * FROM etudiants");
while($row = $result->fetch_assoc()){
 echo "<tr><td>".$row['id']."</td><td>".$row['nom']."</td><td>".$row['filiere']."</td></tr>";
}
?>
</table>
</body>
</html>
