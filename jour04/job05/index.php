<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <form method="POST">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Se connecter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST["username"] ?? '';
        $password = $_POST["password"] ?? '';

        if ($username === "John" && $password === "Rambo") {
            echo "<p>C'est pas ma guerre</p>";
        } else {
            echo "<p>Votre pire cauchemar</p>";
        }
    }
    ?>
</body>
</html>
