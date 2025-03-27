<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Tabla de Categorías</h1>
        <?php
        $tabla = [
            'Frutas' => ['Manzana', 'Naranja', 'Sandia', 'Fresa'],
            'Deportes' => ['Futbol', 'Tenis', 'Baloncesto', 'Béisbol'],
            'Idiomas' => ['Español', 'Inglés', 'Francés', 'Italiano']
        ];

        echo "<table class='table table-striped table-hover'>";
        echo "<thead class='table-dark'><tr>";
        foreach (array_keys($tabla) as $categoria) {
            echo "<th>$categoria</th>";
        }
        echo "</tr></thead><tbody>";

        for ($i = 0; $i < count($tabla['Frutas']); $i++) {
            echo "<tr>";
            foreach ($tabla as $items) {
                echo "<td>{$items[$i]}</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
