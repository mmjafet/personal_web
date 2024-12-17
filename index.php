<?php
// Datos del CV (puedes cambiar estos valores dinámicamente desde PHP)
$nombre = "Tu Nombre";
$profesion = "Desarrollador Web";
$descripcion = "Soy un apasionado del desarrollo web con experiencia en PHP, JavaScript y tecnologías frontend modernas como Bootstrap.";
$experiencia = [
    ["titulo" => "Desarrollador Backend", "empresa" => "Empresa ABC", "periodo" => "2021 - Presente"],
    ["titulo" => "Asistente de TI", "empresa" => "Empresa XYZ", "periodo" => "2019 - 2021"]
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1><?php echo $nombre; ?></h1>
            <h3><?php echo $profesion; ?></h3>
            <p><?php echo $descripcion; ?></p>
        </div>
    </header>

    <!-- Información Personal -->
    <section class="container my-5">
        <h2 class="text-primary mb-4">Información Personal</h2>
        <ul class="list-group">
            <li class="list-group-item"><strong>Correo:</strong> <?php echo $contacto['correo']; ?></li>
            <li class="list-group-item"><strong>Teléfono:</strong> <?php echo $contacto['telefono']; ?></li>
            <li class="list-group-item"><strong>Ciudad:</strong> <?php echo $contacto['ciudad']; ?></li>
        </ul>
    </section>

    <!-- Habilidades -->
    <section class="container my-5">
        <h2 class="text-primary mb-4">Habilidades</h2>
        <div class="row">
            <?php foreach ($habilidades as $habilidad): ?>
                <div class="col-md-3 mb-3">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $habilidad; ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Experiencia -->
    <section class="container my-5">
        <h2 class="text-primary mb-4">Experiencia Laboral</h2>
        <?php foreach ($experiencia as $trabajo): ?>
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $trabajo['titulo']; ?></h5>
                    <h6 class="card-subtitle text-muted"><?php echo $trabajo['empresa']; ?> (<?php echo $trabajo['periodo']; ?>)</h6>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $nombre; ?>. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
