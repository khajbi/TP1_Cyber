<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];

    // Vérification des conditions du mot de passe
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';

    if (!preg_match($passwordPattern, $new_password)) {
        // Si le mot de passe ne respecte pas les critères, rediriger avec un message d'erreur
        header("Location: register.php?error=Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.");
        exit();
    }

    // Charger les utilisateurs existants depuis le fichier users.json
    $users = [];
    if (file_exists('users.json')) {
        $users = json_decode(file_get_contents('users.json'), true);
    }

    // Vérifier si l'utilisateur existe déjà
    if (isset($users[$new_username])) {
        header("Location: register.php?error=Nom d'utilisateur déjà pris");
        exit();
    }

    // Ajouter le nouvel utilisateur (mot de passe haché)
    $users[$new_username] = password_hash($new_password, PASSWORD_DEFAULT);

    // Sauvegarder les utilisateurs dans le fichier users.json
    file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));

    // Redirection après succès
    header("Location: index.php?message=Inscription réussie, veuillez vous connecter");
    exit();
}
?>
