<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobación de Variable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Comprobación y Transformación de Variable</h1>
        
        <form method="post" class="mb-4">
            <div class="mb-3">
                <label for="inputText" class="form-label">Ingrese un texto (o déjelo vacío):</label>
                <input type="text" class="form-control" id="inputText" name="inputText">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $variable = $_POST['inputText'];
            
            if (empty($variable)) {
                $variable = "texto por defecto en minusculas";
            }
            
            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>Resultado:</h5>";
            echo "<p class='card-text'><strong>" . strtoupper($variable) . "</strong></p>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
