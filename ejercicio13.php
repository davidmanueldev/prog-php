<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Dinámico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Array Dinámico</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Explicación</h5>
                <p class="card-text">Este programa añade valores aleatorios a un array hasta que su longitud sea 100. Luego, muestra la información del array por pantalla.</p>
            </div>
        </div>

        <?php
        $array = [];
        while (count($array) < 100) {
            $array[] = rand(1, 1000); // Añade números aleatorios entre 1 y 1000
        }
        ?>

        <div class="mt-4">
            <h2>Contenido del Array</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Índice</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($array as $index => $value): ?>
                            <tr>
                                <td><?php echo $index; ?></td>
                                <td><?php echo $value; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <h2>Estadísticas del Array</h2>
            <ul class="list-group">
                <li class="list-group-item">Longitud del array: <?php echo count($array); ?></li>
                <li class="list-group-item">Valor mínimo: <?php echo min($array); ?></li>
                <li class="list-group-item">Valor máximo: <?php echo max($array); ?></li>
                <li class="list-group-item">Promedio: <?php echo round(array_sum($array) / count($array), 2); ?></li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
