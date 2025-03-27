<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Bueno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Verificador de Número Bueno</h1>
        <form method="POST" class="mb-3">
            <div class="input-group">
                <input type="number" name="numero" class="form-control" placeholder="Ingrese un número" required>
                <button type="submit" class="btn btn-primary">Verificar</button>
            </div>
        </form>
        <?php
        function esNumeroBueno($numero) {
            $sumaDivisores = 0;
            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $sumaDivisores += $i;
                }
            }
            return $sumaDivisores == $numero;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = intval($_POST['numero']);
            $esBueno = esNumeroBueno($numero);
            
            echo "<div class='alert " . ($esBueno ? "alert-success" : "alert-danger") . "'>";
            echo "<h4 class='alert-heading'>" . ($esBueno ? "¡Es un número bueno!" : "No es un número bueno") . "</h4>";
            echo "<p>El número $numero " . ($esBueno ? "es" : "no es") . " un número bueno.</p>";
            echo "</div>";

            echo "<div class='card mt-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>Divisores de $numero:</h5>";
            echo "<ul class='list-group list-group-flush'>";
            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    echo "<li class='list-group-item'>$i</li>";
                }
            }
            echo "</ul>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- Ejemplos números buenos serian: 6, 28, 496 -->