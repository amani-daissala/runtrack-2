<?php
if ($_POST) {
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];
    
    // Génération du toit
    echo "<pre>";
    for ($i = 1; $i <= $largeur/2; $i++) {
        echo str_repeat(' ', $largeur/2 - $i);
        echo str_repeat('*', $i * 2 - 1);
        echo "\n";
    }
    
    // Génération des murs
    for ($i = 1; $i <= $hauteur; $i++) {
        if ($i == $hauteur) {
            // Dernière ligne (sol)
            echo str_repeat('*', $largeur);
        } else {
            // Murs avec intérieur vide
            echo '*' . str_repeat(' ', $largeur - 2) . '*';
        }
        echo "\n";
    }
    echo "</pre>";
}
?>

<form method="POST">
    Largeur: <input type="text" name="largeur"><br><br>
    Hauteur: <input type="text" name="hauteur"><br><br>
    <input type="submit" value="Créer la maison">
</form>