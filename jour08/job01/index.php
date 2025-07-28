<?php
session_start(); // Démarre la session

// Réinitialisation si bouton cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    // Incrémentation ou initialisation
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 1;
    } else {
        $_SESSION['nbvisites']++;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Fredoka', sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #333;
        }

        h1 {
            font-size: 3rem;
            background: linear-gradient(to right, #ff6a00, #ee0979);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 40px;
            animation: pop 0.6s ease-out;
        }

        @keyframes pop {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        button {
            background-color: #f07abbcc;
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.2rem;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.2s, background-color 0.3s;
        }

        button:hover {
            transform: scale(1.1);
            background-color: #ffffff;
        }

        form {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>Nombre de visites : <?= $_SESSION['nbvisites'] ?></h1>

    <form method="post">
        <button type="submit" name="reset">🔄 Réinitialiser</button>
    </form>
</body>
</html>
