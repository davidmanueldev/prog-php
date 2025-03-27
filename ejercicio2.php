<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrados de los 30 primeros números naturales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cuadrados de los 30 primeros números naturales</h1>
        <div class="row">
            <?php
            for ($i = 1; $i <= 30; $i++) {
                $cuadrado = $i * $i;
                $paridad = ($i % 2 == 0) ? 'Par' : 'Impar';
                echo "<div class='col-md-4 mb-3'>";
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>Número: $i</h5>";
                echo "<p class='card-text'>Cuadrado: $cuadrado</p>";
                echo "<p class='card-text'>Paridad: $paridad</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
