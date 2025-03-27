<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tipos de Variables en PHP</h1>
        
        <?php
        $miArray = [1, 2, 3, 4, 5];
        $miString = "Hola, mundo!";
        $miBoleano = true;

        function mostrarTipoVariable($variable, $nombre) {
            $tipo = gettype($variable);
            $valor = is_array($variable) ? implode(', ', $variable) : (is_bool($variable) ? ($variable ? 'true' : 'false') : $variable);
            
            echo "<div class='card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>Variable: $nombre</h5>";
            echo "<p class='card-text'>Tipo: <strong>$tipo</strong></p>";
            echo "<p class='card-text'>Valor: <code>$valor</code></p>";
            echo "</div>";
            echo "</div>";
        }

        mostrarTipoVariable($miArray, 'miArray');
        mostrarTipoVariable($miString, 'miString');
        mostrarTipoVariable($miBoleano, 'miBoleano');
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
