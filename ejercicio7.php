<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cálculo del Factorial de 5</h1>
        <?php
        function factorial($n) {
            if ($n <= 1) return 1;
            return $n * factorial($n - 1);
        }

        $numero = 5;
        $resultado = factorial($numero);

        echo "<div class='alert alert-info'>";
        echo "<p>El factorial de $numero es: <strong>$resultado</strong></p>";
        echo "</div>";

        echo "<div class='card mt-3'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>Proceso de cálculo:</h5>";
        echo "<ul class='list-group list-group-flush'>";
        for ($i = 1; $i <= $numero; $i++) {
            echo "<li class='list-group-item'>$i! = " . factorial($i) . "</li>";
        }
        echo "</ul>";
        echo "</div>";
        echo "</div>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
