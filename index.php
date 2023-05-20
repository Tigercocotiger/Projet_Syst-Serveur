<!DOCTYPE html>
<html>

<head>
    <title>Page avec tableau</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <h1>Tableau des utilisateurs</h1>
    <input type="text" id="searchInput" placeholder="Rechercher par login" onkeyup="searchUser()">
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "annuaire";

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if (!$conn) {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    // Exemple de requête avec tri par Login
    $sql = "SELECT Login, Psw, Nom, Prénom, Mail, Arrivée FROM utilisateur ORDER BY Login";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Afficher le tableau HTML
        echo "<table id='userTable'>";
        echo "<tr><th>Login</th><th>Mot de passe</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Arrivée</th><th>Action</th></tr>";

        // Traiter les résultats
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Login"] . "</td>";
            echo "<td>" . $row["Psw"] . "</td>";
            echo "<td>" . $row["Nom"] . "</td>";
            echo "<td>" . $row["Prénom"] . "</td>";
            echo "<td>" . $row["Mail"] . "</td>";
            echo "<td>" . $row["Arrivée"] . "</td>";
            echo "<td><button class='delete-button' onclick='deleteUser(\"" . $row["Login"] . "\")'>Supprimer</button></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }

    // Fermer la connexion
    mysqli_close($conn);
    ?>

    <h2>Ajouter un nouvel utilisateur</h2>
    <form method="POST" action="ajouter_utilisateur.php">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" required>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="arrivee">Date d'arrivée:</label>
        <input type="text" name="arrivee" id="arrivee" required>

        <input type="submit" value="Ajouter">
    </form>

    <script src="main.js"></script>
</body>

</html>