<<<<<<< HEAD
<?php
// Vérifie si le champ "nombre" a été envoyé via GET
if (isset($_GET['nombre']) && $_GET['nombre'] !== '') {
    $nombre = $_GET['nombre'];

    // Vérifie que c'est bien un nombre
    if (is_numeric($nombre)) {
        // Vérifie si le nombre est pair ou impair
        if ($nombre % 2 === 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>

<!-- Formulaire HTML de type GET -->
<form method="GET">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Vérifier">
</form>
=======
<?php
// Vérifie si le champ "nombre" a été envoyé via GET
if (isset($_GET['nombre']) && $_GET['nombre'] !== '') {
    $nombre = $_GET['nombre'];

    // Vérifie que c'est bien un nombre
    if (is_numeric($nombre)) {
        // Vérifie si le nombre est pair ou impair
        if ($nombre % 2 === 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
}
?>

<!-- Formulaire HTML de type GET -->
<form method="GET">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Vérifier">
</form>
>>>>>>> 032b738649d2b429bb7235b2f26bd8060cb51674
