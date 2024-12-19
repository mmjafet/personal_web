<?php
$nombre = "Jafet Martínez Meza";
$profesion = "Desarrollador Web";
$descripcion = "Apacionadp del desarrollo web con expereciencia en el desarrollo de aplicaciones web con pyhton y php";

$experiencia = [
    ["título" => "Desarrollador Backend", "empresa" => "Empresa ABC", "periodo" => "2021 - Presente"],
    ["título" => "Proyecto de punto de venta", "empresa" => "Empresa XYZ", "periodo" => "2019 - 2021"]
];

$habilidades = ["HTML5", "CSS3", "JavaScript", "PHP", "Bootstrap", "MySQL", "Python", "GitHub", "Git", "C", "Figma"];
$aplicaciones = [
    "HTML5" => "img/Html5.png",
    "CSS3" => "img/css3.png",
    "JavaScript" => "img/javascript.png",
    "PHP" => "img/php.png",
    "Bootstrap" => "img/bootstrap.png",
    "MySQL" => "img/mysql.png",
    "Python" => "img/python.png",
    "GitHub" => "img/github.png",
    "Git" => "img/git.png",
    "C" => "img/c.png",
    "Figma" => "img/figma.png"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de: <?php echo $nombre; ?></title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .habilidad-card {
            text-align: center;
            cursor: pointer;
            padding: 1rem;
            transition: transform 0.2s ease-in-out;
            position: relative;
        }

        .habilidad-card:hover {
            transform: scale(1.1);
        }

        .habilidad-card img {
            display: none; /* La imagen estará oculta por defecto */
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 40px; /* Tamaño pequeño */
            height: 40px;
        }

        .experiencia-lista li {
            font-size: 1.1rem;
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

    <!-- Sección de Experiencia -->
    <section class="container my-5">
        <h2 class="section-title">Proyectos</h2>
        <ul class="list-group experiencia-lista">
            <?php foreach ($experiencia as $experiencia_item): ?>
                <li class="list-group-item">
                    <strong><?php echo $experiencia_item['título']; ?></strong> en <?php echo $experiencia_item['empresa']; ?> (<?php echo $experiencia_item['periodo']; ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Habilidades -->
    <section class="container my-5">
        <h2 class="section-title">Habilidades</h2>
        <div class="row">
            <?php foreach ($habilidades as $habilidad): ?>
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm habilidad-card" 
                        data-bs-toggle="modal" 
                        data-bs-target="#modalHabilidad" 
                        onclick="cargarHabilidad('<?php echo $habilidad; ?>', '<?php echo $aplicaciones[$habilidad] ?? ''; ?>')"
                        onmouseenter="mostrarLogo(this)" 
                        onmouseleave="ocultarLogo(this)">
                        <div class="card-body">
                            <strong><?php echo $habilidad; ?></strong>
                            <img src="<?php echo $aplicaciones[$habilidad] ?? ''; ?>" alt="<?php echo $habilidad; ?>">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modalHabilidad" tabindex="-1" aria-labelledby="modalHabilidadLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHabilidadLabel">Detalles de la habilidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImg" src="" alt="" style="width: 80px; height: 80px;">
                    <h5 id="modalNombre"></h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $nombre; ?> | Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Script JavaScript -->
    <script>
        function mostrarLogo(element) {
            const img = element.querySelector('img');
            img.style.display = 'block'; // Muestra la imagen
        }

        function ocultarLogo(element) {
            const img = element.querySelector('img');
            img.style.display = 'none'; // Oculta la imagen
        }

        function cargarHabilidad(nombre, imagenSrc) {
            document.getElementById('modalNombre').innerText = nombre;
            document.getElementById('modalImg').src = imagenSrc;
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
