<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Identification</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="form-container">
        <!-- Ajout du logo ici -->
        <div class="logo-container">
            <img src="logo.png" alt="Logo" class="logo">
        </div>

        <h2>Identifiez-vous</h2>
        <form action="login.php" method="POST">
            <div class="input-container">
                <label for="username">Identifiant :</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-container">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <small>Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.</small>
            </div>
            <div class="button-container">
                <input type="reset" value="Réinitialiser">
                <input type="submit" value="Valider">
            </div>
        </form>
        <div>
            <p>Pas encore de compte ? <a href="register.php">S'inscrire</a></p>
        </div>
        <div>
            <?php
            if (isset($_GET['error'])) {
                echo "<p style='color:red;'>Erreur : " . htmlspecialchars($_GET['error']) . "</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>


