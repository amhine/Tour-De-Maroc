<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de mot de passe</title>
    <style>
        /* Styles globaux */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #f0fdf4, #ccfbf1); /* Dégradé vert clair */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Conteneur principal */
        .glass-container {
            background: rgba(255, 255, 255, 0.1); /* Fond semi-transparent */
            backdrop-filter: blur(10px); /* Effet de flou */
            border-radius: 12px; /* Bordures arrondies */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordure semi-transparente */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre légère */
            padding: 2rem;
            max-width: 28rem;
            width: 100%;
            text-align: center;
        }

        /* Titre */
        h1 {
            font-size: 1.875rem; /* 30px */
            font-weight: bold;
            color: #1e293b; /* Gris foncé */
            margin-bottom: 1rem; /* 16px */
        }

        /* Paragraphe */
        p {
            color: #4b5563; /* Gris moyen */
            margin-bottom: 1.5rem; /* 24px */
        }

        /* Bouton de réinitialisation */
        .glass-button {
            display: inline-block;
            padding: 0.75rem 1.5rem; /* 12px 24px */
            background: rgba(255, 255, 255, 0.2); /* Fond semi-transparent */
            backdrop-filter: blur(10px); /* Effet de flou */
            border: 1px solid rgba(255, 255, 255, 0.3); /* Bordure semi-transparente */
            border-radius: 0.5rem; /* 8px */
            color: white;
            font-weight: 600;
            text-decoration: none;
            background: linear-gradient(to right, #4ade80, #2dd4bf); /* Dégradé vert */
            transition: all 0.3s ease;
        }

        .glass-button:hover {
            background: linear-gradient(to right, #22c55e, #14b8a6); /* Dégradé vert plus foncé */
            transform: translateY(-2px); /* Effet de soulèvement */
        }

        /* Texte en bas */
        .footer-text {
            color: #6b7280; /* Gris clair */
            font-size: 0.875rem; /* 14px */
            margin-top: 1.5rem; /* 24px */
        }

        .footer-text a {
            color: #3b82f6; /* Bleu */
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="glass-container">
        <h1>Réinitialisation de mot de passe</h1>
        <p>
            Vous avez demandé à réinitialiser votre mot de passe. Cliquez sur le bouton ci-dessous pour procéder.
        </p>
        <a href="<?php echo $url; ?>" class="glass-button">
            Réinitialiser mon mot de passe
        </a>
        <p class="footer-text">
            Si vous n'avez pas demandé cette réinitialisation, veuillez ignorer cet e-mail.
        </p>
    </div>
</body>
</html>