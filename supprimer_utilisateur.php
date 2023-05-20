<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "annuaire";

// Récupérer le login de l'utilisateur à supprimer
$login = $_POST['login'];

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Préparer la requête de suppression
$sql = "DELETE FROM utilisateur WHERE Login = '$login'";

if (mysqli_query($conn, $sql)) {
    echo "Utilisateur supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression de l'utilisateur : " . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);
?>