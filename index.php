<?php
// Datos del CV (puedes cambiar estos valores dinámicamente desde PHP)
$nombre = "Tu Nombre";
$profesion = "Desarrollador Web";
$descripcion = "Soy un apasionado del desarrollo web con experiencia en PHP, JavaScript y tecnologías frontend modernas como Bootstrap.";

$experiencia = [
    ["título" => "Desarrollador Backend", "empresa" => "Empresa ABC", "periodo" => "2021 - Presente"],
    ["título" => "Asistente de TI", "empresa" => "Empresa XYZ", "periodo" => "2019 - 2021"]
];

$habilidades = ["HTML5", "CSS3", "JavaScript", "PHP", "Bootstrap", "MySQL"];
$contacto = ["correo" => "tucorreo@ejemplo.com", "telefono" => "123-456-7890", "ciudad" => "Tu Ciudad"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de <?php echo $nombre; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- CSS Personalizado -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #0d6efd, #003a9b);
            color: #fff;
            padding: 3rem 0;
        }

        h1, h2 {
            font-weight: bold;
        }

        .section-title {
            margin-bottom: 2rem;
            border-bottom: 2px solid #0d6efd;
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        .card {
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
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
        <div class="container text-center">
            <h1><?php echo $nombre; ?></h1>
            <h3><?php echo $profesion; ?></h3>
            <p class="lead"><?php echo $descripcion; ?></p>
        </div>
    </header>

    <!-- Información Personal -->
    <section class="container my-5">
        <h2 class="section-title">Información Personal</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3">
                    <h5>Correo</h5>
                    <p><?php echo $contacto['correo']; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3">
                    <h5>Teléfono</h5>
                    <p><?php echo $contacto['telefono']; ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm p-3">
                    <h5>Ciudad</h5>
                    <p><?php echo $contacto['ciudad']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiencia -->
    <section class="container my-5">
        <h2 class="section-title">Experiencia Laboral</h2>
        <div class="row">
            <?php foreach ($experiencia as $exp): ?>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $exp['título']; ?></h5>
                            <p class="card-text"><strong>Empresa:</strong> <?php echo $exp['empresa']; ?></p>
                            <p class="card-text"><strong>Periodo:</strong> <?php echo $exp['periodo']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Habilidades -->
    <section class="container my-5">
        <h2 class="section-title">Habilidades</h2>
        <div class="row">
            <?php foreach ($habilidades as $habilidad): ?>
                <div class="col-md-3 mb-3">
                    <div class="card text-center shadow-sm p-3">
                        <strong><?php echo $habilidad; ?></strong>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
