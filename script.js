document.querySelector('form').addEventListener('submit', function(e) {
    var password = document.getElementById('password').value;

    // Expression régulière pour valider le mot de passe
    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

    if (!passwordPattern.test(password)) {
        alert("Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.");
        e.preventDefault();  // Empêche l'envoi du formulaire
    }
});
