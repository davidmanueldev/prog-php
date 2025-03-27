<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares del 1 al 100</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Números Pares del 1 al 100</h1>
        <div class="row">
            <?php
            for ($i = 2; $i <= 100; $i += 2) {
                echo "<div class='col-md-2 mb-3'>";
                echo "<div class='card bg-light'>";
                echo "<div class='card-body text-center'>";
                echo "<h5 class='card-title'>{$i}</h5>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
