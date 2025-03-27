<?php
function generarTablaMultiplicar($numero) {
    echo "<div class='container mt-4'>";
    echo "<h2>Tabla de multiplicar del $numero</h2>";
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead class='thead-dark'><tr><th>Multiplicando</th><th>Multiplicador</th><th>Resultado</th></tr></thead>";
    echo "<tbody>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr><td>$numero</td><td>$i</td><td>$resultado</td></tr>";
    }
    echo "</tbody></table></div>";
}
?>

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
        <h1>Generador de Tabla de Multiplicar</h1>
        <form method="POST" class="mb-4">
            <div class="input-group">
                <input type="number" name="numero" class="form-control" placeholder="Ingrese un número" required>
                <button type="submit" class="btn btn-primary">Generar Tabla</button>
            </div>
        </form>
        <?php
        if (isset($_POST['numero'])) {
            $numero = intval($_POST['numero']);
            generarTablaMultiplicar($numero);
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
