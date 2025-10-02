<?php
// Récupération du style sélectionné
$style = isset($_POST['style']) ? $_POST['style'] : 'style1';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Styles Dynamiques</title>
    <link rel="stylesheet" href="<?php echo $style; ?>.css">
</head>
<body>
    <div class="container">
        <h1>🎨 Choisissez votre style</h1>
        
        <form method="POST">
            <label>Style :</label>
            <select name="style">
                <option value="style1" <?php echo ($style == 'style1') ? 'selected' : ''; ?>>Style 1</option>
                <option value="style2" <?php echo ($style == 'style2') ? 'selected' : ''; ?>>Style 2</option>
                <option value="style3" <?php echo ($style == 'style3') ? 'selected' : ''; ?>>Style 3</option>
            </select>
            
            <input type="submit" value="Changer le style">
        </form>
        
        <?php if ($_POST): ?>
            <p class="message">Style "<?php echo $style; ?>" appliqué !</p>
        <?php endif; ?>
    </div>
</body>
</html>