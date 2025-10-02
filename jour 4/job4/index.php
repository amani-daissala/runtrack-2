<?php
// Si des données ont été envoyées via POST
if (!empty($_POST)) {
    echo "<table border='1' cellpadding='8'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";

    // Parcours du tableau $_POST
    foreach ($_POST as $argument => $valeur) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($argument) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
    }

    echo "</tbody></table><br>";
}
?>

<!-- Formulaire HTML (méthode POST) -->
<form method="POST">
    <label>Prénom : </label><input type="text" name="prenom"><br><br>
    <label>Nom : </label><input type="text" name="nom"><br><br>
    <label>Email : </label><input type="text" name="email"><br><br>

    <input type="submit" value="Envoyer">
</form>
 
