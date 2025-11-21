<?php
$title = "Connexion";
$description = "Page permettant de se connecter à votre compte Etudaviz";
$h1 = "Connexion à votre espace Etudaviz";
require "../include/header.inc.php";
require  "../include/functions.inc.php";
//require "../include/db_connect.php";

ensureSession();
$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des champs
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

        if (!empty($email) && !empty($password)) {
        // Vérification dans le CSV (functions.inc.php)
        $user = verifyLoginCsv($email, $password);

        if ($user !== null) {
            // Connexion réussie → on stocke l'utilisateur en session
            loginUser($user);
            header('Location: espace_utilisateur.php');
            exit;
        } else {
            $erreur = "Email ou mot de passe incorrect.";
        }
    } else {
        $erreur = "Veuillez remplir tous les champs.";
    }
}
?>

<div class="login-container">
    <div class="login-box">
        <h2>Connexion</h2>

        <?php if ($erreur): ?>
            <div class="error" style="color:red; text-align:center;">
                <?= htmlspecialchars($erreur) ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Adresse email" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>

        <a href="inscription.php">Créer un compte</a>
        <a href="#">Mot de passe oublié ?</a>
    </div>
</div>

<?php require "../include/footer.inc.php"; ?>
