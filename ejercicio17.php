<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha Actual</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
        }
        .date-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 90%;
            width: 400px;
        }
        h1 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }
        .date {
            font-size: 1.5rem;
            color: #2c3e50;
            margin: 1rem 0;
        }
        @media (max-width: 480px) {
            .date-container {
                padding: 1.5rem;
                width: 85%;
            }
            h1 {
                font-size: 1.5rem;
            }
            .date {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="date-container">
        <h1>Fecha Actual</h1>
        <div class="date">
            <?php
            setlocale(LC_TIME, 'es_ES.UTF-8');
            echo strftime("%A, %d de %B de %Y");
            ?>
        </div>
    </div>
</body>
</html>