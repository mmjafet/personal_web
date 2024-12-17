<?php
// Datos del CV (puedes cambiar estos valores dinámicamente desde PHP)
$nombre = "Tu Nombre";
$profesion = "Desarrollador Web";
$descripcion = "Soy un apasionado del desarrollo web con experiencia en PHP, JavaScript y tecnologías frontend modernas como Bootstrap.";

$experiencia = [
    ["título" => "Desarrollador Backend", "empresa" => "Empresa ABC", "periodo" => "2021 - Presente"],
    ["título" => "Asistente de TI", "empresa" => "Empresa XYZ", "periodo" => "2019 - 2021"]
];

$habilidades = ["HTML5", "CSS3", "JavaScript", "PHP", "Bootstrap", "MySQL" ,"Python", "GitHub", "Git", "C", "Figma"];
$contacto = ["correo" => "tucorreo@ejemplo.com", "telefono" => "123-456-7890", "ciudad" => "Tu Ciudad"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de <?php echo $nombre; ?></title>
    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #0d6efd, #004085);
            color: white;
            text-align: center;
            padding: 3rem 0;
        }

        .section-title {
            color: #0d6efd;
            border-bottom: 2px solid #0d6efd;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="container">
            <h1><?php echo $nombre; ?></h1>
            <h3><?php echo $profesion; ?></h3>
            <p><?php echo $descripcion; ?></p>
        </div>
    </header>

    <!-- Información Personal -->
    <section class="container my-5">
        <h2 class="section-title">Información Personal</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Correo</h5>
                        <p><?php echo $contacto['correo']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Teléfono</h5>
                        <p><?php echo $contacto['telefono']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Ciudad</h5>
                        <p><?php echo $contacto['ciudad']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiencia Laboral -->
    <section class="container my-5">
        <h2 class="section-title">Experiencia Laboral</h2>
        <div class="row">
            <?php foreach ($experiencia as $exp): ?>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5><?php echo $exp['título']; ?></h5>
                            <p><strong>Empresa:</strong> <?php echo $exp['empresa']; ?></p>
                            <p><strong>Periodo:</strong> <?php echo $exp['periodo']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Habilidades -->
    <section class="container my-5">
        <h2 class="section-title">Habilidades</h2>
        <div class="row text-center">
            <?php foreach ($habilidades as $habilidad): ?>
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <strong><?php echo $habilidad; ?></strong>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $nombre; ?> | Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pp3iFFKa8nF0kSz3RG5tsKa2Bkl+gG5P6WxZbG9cwRIlB6Rl6JmsM5eo4eLGLR88" crossorigin="anonymous"></script>
</body>
</html>
