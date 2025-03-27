<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación de los 20 primeros números naturales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Multiplicación de los 20 primeros números naturales</h1>
        <?php
        $resultado = 1;
        for ($i = 1; $i <= 20; $i++) {
            $resultado *= $i;
            echo "<div class='alert alert-info mb-2'>";
            echo "Multiplicando hasta $i: " . number_format($resultado, 0, ',', '.');
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
