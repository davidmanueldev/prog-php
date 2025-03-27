<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Validación de Email</h1>
        <?php
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        if (!empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='alert alert-success'>El email '$email' es válido.</div>";
            } else {
                echo "<div class='alert alert-danger'>El email '$email' no es válido.</div>";
            }
        }
        ?>
        <form action="" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="email" class="form-control" placeholder="Ingrese un email" value="<?php echo htmlspecialchars($email); ?>">
                <button type="submit" class="btn btn-primary">Validar</button>
            </div>
        </form>
        <p class="text-muted">Ingrese un email como: <code>pepe@pepe.com</code></p>
    </div>
</body>
</html>
