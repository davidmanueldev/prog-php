<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Formulario de Validación</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="ci" class="form-label">CI:</label>
                <input type="text" class="form-control" id="ci" name="ci" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">URL:</label>
                <input type="text" class="form-control" id="url" name="url" required>
            </div>
            <button type="submit" class="btn btn-primary">Validar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ci = $_POST['ci'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $url = $_POST['url'];

            $errores = [];

            if (!is_numeric($ci)) {
                $errores[] = "El CI debe ser un número.";
            }

            if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
                $errores[] = "El nombre solo debe contener letras y espacios.";
            }

            if (!preg_match("/^[a-zA-Z ]*$/", $apellidos)) {
                $errores[] = "Los apellidos solo deben contener letras y espacios.";
            }

            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                $errores[] = "La URL no es válida.";
            }

            if (empty($errores)) {
                echo "<div class='alert alert-success mt-3'>Todos los datos son válidos.</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'><ul>";
                foreach ($errores as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul></div>";
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Ejemplo de datos válidos
$ejemploCI = "12345678";
$ejemploNombre = "Juan";
$ejemploApellidos = "Pérez García";
$ejemploURL = "https://www.ejemplo.com";

echo "<div class='mt-4'>";
echo "<h3>Ejemplo de datos válidos:</h3>";
echo "<ul>";
echo "<li><strong>CI:</strong> $ejemploCI</li>";
echo "<li><strong>Nombre:</strong> $ejemploNombre</li>";
echo "<li><strong>Apellidos:</strong> $ejemploApellidos</li>";
echo "<li><strong>URL:</strong> $ejemploURL</li>";
echo "</ul>";
echo "</div>";
?>
