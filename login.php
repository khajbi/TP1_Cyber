<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Charger les utilisateurs depuis le fichier users.json
    if (file_exists('users.json')) {
        $users = json_decode(file_get_contents('users.json'), true);
    } else {
        $users = [];
    }

    // Vérifier les identifiants
    if (isset($users[$username]) && password_verify($password, $users[$username])) {
        // Connexion réussie
        echo "<p>Bienvenue, $username !</p>";
    } else {
        // Erreur d'authentification
        header("Location: index.php?error=Identifiants incorrects");
        exit();
    }
}
?>
