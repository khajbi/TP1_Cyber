<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <!-- Ajout du logo ici -->
        <div class="logo-container">
            <img src="logo.png" alt="Logo" class="logo">
        </div>

        <h2>S'inscrire</h2>
        <form action="register_process.php" method="POST">
            <div class="input-container">
                <label for="new_username">Identifiant :</label>
                <input type="text" id="new_username" name="new_username" required>
            </div>
            <div class="input-container">
                <label for="new_password">Mot de passe :</label>
                <input type="password" id="new_password" name="new_password" required>
                <small>Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.</small>
            </div>
            <div class="button-container">
                <input type="reset" value="Réinitialiser">
                <input type="submit" value="S'inscrire">
            </div>
        </form>

        <?php
        // Vérifier si un message d'erreur a été passé dans l'URL
        if (isset($_GET['error'])) {
            echo "<p style='color:red;'>" . htmlspecialchars($_GET['error']) . "</p>";
        }
        ?>
    </div>
</body>
</html>
