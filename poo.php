<?php 
    // Tarea de progra
    Class Coche {
        public $marca;
        public $modelo;
        public $color;
        public $año;
        public $estado = false;

        function __construct($marca, $modelo, $color, $año) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
            $this->año = $año;
        }

        function encender() {
            $this->estado = true;
            return "🚗 El coche está encendido";
        }

        function apagar() {
            $this->estado = false;
            return "🚫 El coche está apagado";
        }

        function mostrarHTML() {
            $estadoTexto = $this->estado ? "Encendido" : "Apagado";
            $estadoClase = $this->estado ? "encendido" : "apagado";
            
            $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Información del Coche</title>
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
                <style>
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: "Poppins", sans-serif;
                    }

                    body {
                        min-height: 100vh;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        gap: 2rem;
                        background: linear-gradient(45deg, #1a2a6c, #b21f1f);
                        padding: 2rem;
                    }

                    .card {
                        background: rgba(255, 255, 255, 0.9);
                        padding: 2rem;
                        border-radius: 20px;
                        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
                        backdrop-filter: blur(10px);
                        width: 400px;
                        opacity: 0;
                        transform: translateY(20px);
                        animation: fadeIn 0.6s ease-out forwards;
                    }

                    .info-item {
                        margin: 1rem 0;
                        padding: 0.8rem;
                        border-radius: 10px;
                        background: rgba(255, 255, 255, 0.5);
                        transform: translateX(-20px);
                        opacity: 0;
                        animation: slideIn 0.5s ease-out forwards;
                    }

                    .info-item:nth-child(1) { animation-delay: 0.2s; }
                    .info-item:nth-child(2) { animation-delay: 0.4s; }
                    .info-item:nth-child(3) { animation-delay: 0.6s; }
                    .info-item:nth-child(4) { animation-delay: 0.8s; }
                    .info-item:nth-child(5) { animation-delay: 1s; }

                    .label {
                        font-size: 0.8rem;
                        color: #666;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                    }

                    .value {
                        font-size: 1.1rem;
                        color: #333;
                        margin-top: 0.2rem;
                    }

                    .estado {
                        padding: 0.3rem 1rem;
                        border-radius: 15px;
                        display: inline-block;
                        font-weight: 500;
                    }

                    .encendido {
                        background: #4CAF50;
                        color: white;
                    }

                    .apagado {
                        background: #f44336;
                        color: white;
                    }

                    @keyframes fadeIn {
                        to {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    @keyframes slideIn {
                        to {
                            opacity: 1;
                            transform: translateX(0);
                        }
                    }
                </style>
            </head>
            <body>
                <div class="card">
                    <div class="info-item">
                        <div class="label">Marca</div>
                        <div class="value">' . $this->marca . '</div>
                    </div>
                    <div class="info-item">
                        <div class="label">Modelo</div>
                        <div class="value">' . $this->modelo . '</div>
                    </div>
                    <div class="info-item">
                        <div class="label">Color</div>
                        <div class="value">' . $this->color . '</div>
                    </div>
                    <div class="info-item">
                        <div class="label">Año</div>
                        <div class="value">' . $this->año . '</div>
                    </div>
                    <div class="info-item">
                        <div class="label">Estado</div>
                        <div class="value">
                            <span class="estado ' . $estadoClase . '">' . $estadoTexto . '</span>
                        </div>
                    </div>
                </div>';
            return $html;
        }
    }

    // Crear dos coches
    $coche1 = new Coche("Toyota", "Corolla", "Rojo", 2023);
    $coche2 = new Coche("Honda", "Civic", "Azul", 2022);

    // Encender el primer coche
    $coche1->encender();

    // Mostrar la información de ambos coches
    echo $coche1->mostrarHTML();
    echo $coche2->mostrarHTML();
?>