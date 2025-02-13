# Projet : Formulaire de Connexion et Inscription sécurisé

Ce projet permet de gérer un formulaire de **connexion** et d'**inscription** pour des utilisateurs. Les utilisateurs peuvent créer un compte avec un mot de passe respectant certaines règles de sécurité, et se connecter à l'aide de leur identifiant et mot de passe. Les mots de passe sont sécurisés grâce au hachage avec `password_hash()` pour garantir leur protection.

## Fonctionnalités

- **Inscription** : Les utilisateurs peuvent s'inscrire en fournissant un identifiant et un mot de passe. Le mot de passe est validé pour respecter des critères de sécurité :
  - Minimum 8 caractères
  - Contient au moins une majuscule
  - Contient au moins une minuscule
  - Contient au moins un chiffre
- **Connexion** : Les utilisateurs peuvent se connecter avec leur identifiant et mot de passe.
- **Sécurité** : 
  - Les mots de passe sont hachés avant d'être stockés.
  - La validation des entrées et l'échappement des données sont utilisés pour éviter les attaques XSS.
  - Les données sont stockées dans un fichier JSON local (`users.json`).

## Prérequis

Pour exécuter ce projet, il faut avoir installé les éléments suivants :

- **PHP** 
- **XAMPP** ou un serveur local similaire (pour exécuter PHP en local)
- **Navigateur web** (par exemple, Google Chrome, Firefox)

## Structure des fichiers

├── index.php          # Page principale (connexion)

├── register.php       # Page d'inscription

├── register_process.php  # Traitement de l'inscription

├── login.php          # Traitement de la connexion

├── script.js          # JavaScript pour valider les mots de passe côté client

├── style.css          # Styles CSS pour l'apparence du formulaire

├── users.json         # Fichier JSON contenant les utilisateurs enregistrés

└── README.md          # Ce fichier

## Fonctionnement du stockage
**users.json** : Le fichier users.json est utilisé pour stocker les informations des utilisateurs, y compris leur identifiant et mot de passe (haché). Ce fichier est créé automatiquement lors de l'inscription d'un nouvel utilisateur. Il est important de protéger ce fichier pour éviter tout accès non autorisé.
## Sécurité
- **Hachage des mots de passe** : Les mots de passe sont hachés avec password_hash() et vérifiés avec password_verify() afin d'assurer leur sécurité.
- **Validation des entrées** : Avant de traiter les données saisies dans le formulaire, elles sont validées côté client avec JavaScript et côté serveur avec PHP pour éviter des injections malveillantes.
- **HTTPS recommandé** 
