<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .month-card { transition: transform 0.3s; }
        .month-card:hover { transform: translateY(-5px); }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Meses del Año</h1>
        <div class="row">
            <?php
            $meses = [
                "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ];

            foreach ($meses as $index => $mes) {
                echo "<div class='col-md-3 mb-4'>";
                echo "<div class='card month-card h-100 shadow-sm'>";
                echo "<div class='card-body text-center'>";
                echo "<h5 class='card-title'>" . ($index + 1) . "</h5>";
                echo "<p class='card-text'>{$mes}</p>";
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

