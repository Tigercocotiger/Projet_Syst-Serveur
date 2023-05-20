<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "annuaire";

// Récupérer les données du formulaire
$login = $_POST['login'];
$userPassword = $_POST['password'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$arrivee = $_POST['arrivee'];

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Préparer la requête d'insertion
$sql = "INSERT INTO utilisateur (Login, Psw, Nom, Prénom, Mail, Arrivée)
        VALUES ('$login', '$userPassword', '$nom', '$prenom', '$email', '$arrivee')";

if (mysqli_query($conn, $sql)) {
    echo "Utilisateur ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout de l'utilisateur : " . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);

// Redirection vers la page index.php après l'ajout
header("Location: index.php");
exit();
?>