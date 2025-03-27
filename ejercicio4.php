<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tabla de Multiplicar</h1>
        <?php
        if(isset($_GET['numero']) && is_numeric($_GET['numero'])) {
            $numero = intval($_GET['numero']);
            echo "<h2>Tabla del $numero</h2>";
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>Operación</th><th>Resultado</th></tr></thead>";
            echo "<tbody>";
            for($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<div class='alert alert-warning'>Por favor, proporcione un número válido en la URL (ej: ?numero=5)</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- Para pasarlo por la URL es: ejercicio4.php?numero=5 -->