<?php
// Récupération des données envoyées en POST
$x = $_POST['x'];
$y = $_POST['y'];
$width = $_POST['width'];
$height = $_POST['height'];

// Connexion à la base de données MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insertion des données dans la base de données
$sql = "INSERT INTO rectangles (x, y, width, height) VALUES ($x, $y, $width, $height)";

if (mysqli_query($conn, $sql)) {
  echo "Le rectangle a été enregistré avec succès";
} else {
  echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>