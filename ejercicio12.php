<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Información del Usuario</h1>
        <?php
        $ip = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $isFirefox = strpos($userAgent, 'Firefox') !== false;

        echo "<div class='alert alert-info'>";
        echo "<p><strong>Tu dirección IP es:</strong> $ip</p>";
        echo "</div>";

        if ($isFirefox) {
            echo "<div class='alert alert-success'>";
            echo "<p>¡Enhorabuena por usar Firefox!</p>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
