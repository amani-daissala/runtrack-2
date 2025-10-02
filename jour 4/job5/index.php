<?php
// Vérifie si le formulaire a été soumis avec les deux champs
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifie les identifiants
    if ($username === "John" && $password === "Rambo") {
        echo "C’est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>

<!-- Formulaire de connexion en POST -->
<form method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="Se connecter">
</form>
