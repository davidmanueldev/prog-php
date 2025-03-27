<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio11</title>
        <!-- Importación de Bootstrap CSS para el diseño -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="danger">
        <!-- Importación de Bootstrap JS para componentes interactivos -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Sección 1: Visualización del vector original -->
        <div class="container">
            <div class="alert alert-info">
                <h1>Datos del Vector</h1>
                <?php
                // Definición del vector con valores iniciales
                $vector = array(1, 7, 3, 4, 5, 0);
                // Crear una copia ordenada del vector
                $vectorOrdenado = $vector;
                sort($vectorOrdenado);
                ?>

                <!-- Tabla para mostrar los elementos del vector original -->
                <table class="table table-bordered">
                    <tr>
                    <?php
                        // Iteración sobre cada elemento del vector para mostrarlo en una celda
                        foreach($vector as $a){
                            ?>
                            <td><?php echo $a; ?></td>
                        <?php    
                        }
                    ?>
                    </tr>
                </table>
            </div>
        </div>

        <?php
            /**
             * Función para mostrar los elementos de un vector
             * @param array $vector - Vector a mostrar
             */
            function mostrar($vector){
                foreach($vector as $a){
                    echo $a . " ";
                }
            }

            /**
             * Función para ordenar un vector de menor a mayor
             * @param array &$vector - Vector a ordenar (pasado por referencia)
             * El & permite modificar el vector original
             */
            function ordenar(&$vector){
                sort($vector); // Ordena el vector de forma ascendente
                mostrar($vector); // Muestra el vector ordenado
            }

            /**
             * Función para obtener y mostrar la longitud del vector
             * @param array $vector - Vector del cual se calculará la longitud
             */
            function longitud($vector){
                echo "Longitud: " . count($vector); // count() retorna el número de elementos
            }

            // Funcion para buscar el coso de la búsqueda
            function buscar($vector, $elemento) {
                $posiciones = array();
                foreach ($vector as $indice => $valor) {
                    if ($valor == $elemento) {
                        $posiciones[] = $indice;
                    }
                }
                
                if (empty($posiciones)) {
                    return "El elemento $elemento no se encuentra en el vector";
                } else {
                    return "El elemento $elemento se encuentra en la(s) posicion(es): " . implode(", ", $posiciones);
                }
            }
        ?>

        <!-- Sección 2: Visualización del vector ordenado y su longitud -->
        <div class="container">
            <!-- Panel que muestra el vector ordenado -->
            <div class="alert alert-warning">
                <h1>Vector Ordenado</h1>
                <div class="text-center">
                    <?php mostrar($vectorOrdenado); // Mostrar el vector ordenado ?>
                </div>
            </div>
            <!-- Panel que muestra la longitud del vector -->
            <div class="alert alert-success">
                <h1>Longitud del Vector</h1>
                <div class="text-center">
                    <?php longitud($vector); // Llamada a la función longitud ?>
                </div>
            </div>

            <!-- Sección 3: Búsqueda de elementos -->
            <div class="alert alert-primary">
                <h1>Buscar Elemento</h1>
                <form method="POST" class="mb-3">
                    <div class="input-group">
                        <input type="number" name="busqueda" class="form-control" placeholder="Ingrese el número a buscar" required>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
                <div class="text-center">
                    <?php
                    if (isset($_POST['busqueda'])) {
                        echo "<div class='alert alert-info mt-3'>";
                        echo "<strong>En el vector original:</strong><br>";
                        echo buscar($vector, $_POST['busqueda']);
                        echo "</div>";
                        
                        echo "<div class='alert alert-warning mt-3'>";
                        echo "<strong>En el vector ordenado:</strong><br>";
                        echo buscar($vectorOrdenado, $_POST['busqueda']);
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>