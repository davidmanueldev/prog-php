<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Operaciones con Array</h1>
        
        <form method="post" class="mb-4">
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad de elementos:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Generar formulario</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cantidad'])) {
            $cantidad = intval($_POST['cantidad']);
            
            if (isset($_POST['numeros'])) {
                $numeros = array_map('intval', $_POST['numeros']);
            } else {
                echo "<form method='post'>";
                echo "<input type='hidden' name='cantidad' value='$cantidad'>";
                for ($i = 0; $i < $cantidad; $i++) {
                    echo "<div class='mb-3'>";
                    echo "<label for='numero$i' class='form-label'>Número " . ($i + 1) . ":</label>";
                    echo "<input type='number' class='form-control' id='numero$i' name='numeros[]' required>";
                    echo "</div>";
                }
                echo "<button type='submit' class='btn btn-primary'>Procesar</button>";
                echo "</form>";
                exit;
            }

            function mostrarArray($arr) {
                echo implode(", ", $arr);
            }

            // 1. Recorrer y mostrar
            echo "<div class='card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>1. Array Original</h5>";
            echo "<p class='card-text'>";
            mostrarArray($numeros);
            echo "</p>";
            echo "</div>";
            echo "</div>";

            // 2. Ordenar y mostrar
            $numerosOrdenados = $numeros;
            sort($numerosOrdenados);
            echo "<div class='card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>2. Array Ordenado</h5>";
            echo "<p class='card-text'>";
            mostrarArray($numerosOrdenados);
            echo "</p>";
            echo "</div>";
            echo "</div>";

            // 3. Mostrar longitud
            echo "<div class='card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>3. Longitud del Array</h5>";
            echo "<p class='card-text'>" . count($numeros) . "</p>";
            echo "</div>";
            echo "</div>";

            // 4. Buscar en el vector
            echo "<div class='card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>4. Buscar en el Array</h5>";
            echo "<form method='post' class='mb-3'>";
            echo "<input type='hidden' name='cantidad' value='$cantidad'>";
            foreach ($numeros as $num) {
                echo "<input type='hidden' name='numeros[]' value='$num'>";
            }
            echo "<div class='input-group'>";
            echo "<input type='number' name='buscar' class='form-control' placeholder='Número a buscar' required>";
            echo "<button type='submit' class='btn btn-primary'>Buscar</button>";
            echo "</div>";
            echo "</form>";

            if (isset($_POST['buscar'])) {
                $buscar = intval($_POST['buscar']);
                $indice = array_search($buscar, $numeros);
                if ($indice !== false) {
                    echo "<div class='alert alert-success'>El número $buscar está en la posición $indice (recordando que los arrays en PHP comienzan en 0)</div>";
                } else {
                    echo "<div class='alert alert-danger'>El número $buscar no se encuentra en el array</div>";
                }
            }
            echo "</div>";
            echo "</div>";

            echo "<div class='alert alert-info'>";
            echo "<p><strong>Nota:</strong> En PHP, como en muchos otros lenguajes de programación, los arrays comienzan a contar desde 0. Esto significa que el primer elemento del array tiene el índice 0, el segundo elemento tiene el índice 1, y así sucesivamente.</p>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
