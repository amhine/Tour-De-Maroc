<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour De Maroc - Notification d'Étape</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .header {
            background-color: #004D40;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .stage-details {
            margin: 20px 0;
            padding: 15px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #004D40;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Tour De Maroc</h1>
            <p>Notification d'Étape</p>
        </div>

        <div class="content">
            <h2>Bonjour <?php echo htmlspecialchars($userName, ENT_QUOTES, 'UTF-8'); ?>,</h2>

            <p>L'étape que vous suivez approche à grands pas !</p>

            <div class="stage-details">
                <h3><?php echo htmlspecialchars($stageName, ENT_QUOTES, 'UTF-8'); ?></h3>
                <p><strong>Date:</strong> <?php echo htmlspecialchars($stageDate, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Heure de départ:</strong> <?php echo htmlspecialchars($startTime, ENT_QUOTES, 'UTF-8'); ?>
                </p>
                <p><strong>Distance:</strong> <?php echo htmlspecialchars($distance, ENT_QUOTES, 'UTF-8'); ?> km</p>
                <p><strong>Parcours:</strong> <?php echo htmlspecialchars( $route, ENT_QUOTES, 'UTF-8'); ?></p>
            </div>

            <p>Ne manquez pas cette étape passionnante !</p>

            <a href="<?php echo $trackingLink; ?>" class="button">Suivre l'étape en direct</a>
        </div>

        <div class="footer">
            <p>Tour De Maroc - Suivez la passion du cyclisme</p>
        </div>
    </div>
</body>

</html>