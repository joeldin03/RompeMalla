<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asociaciones y Colaboraciones</title>
    <link rel="stylesheet" href="/RompeMalla/css/Asociaciones.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/logo chiquito.png">

</head>
<body>

<?php include '../resources/header.php'; ?>

    <div class="hero">
        <img src="../img/vacas.png" alt="Fondo vaca">
        <div class="hero-text">
            <h1 style="color: #007f6e">Nuestras Asociaciones y Colaboraciones</h1>
            <br>
            <p>En <span style="color: #ff4a92;">PAWTS</span>, estamos orgullosos de trabajar con marcas y profesionales que comparten nuestra pasión por el cuidado y bienestar de las mascotas.<br>
            <br>Descubre nuestras asociaciones y colaboradores que hacen posible que sigamos creciendo y ofreciendo un servicio de calidad a nuestra comunidad.</p>
        </div>
    </div>

    <section class="colaboradores">
        <div style="background-color: #D5F1E9;">
            <h2 style="color: #ff4a92;">COLABORADORES DE PAWTS</h2>
        </div>
        <div class="cards-container">
            <?php
            for ($i = 0; $i < 9; $i++) {
                echo '
                <div class="card">
                    <img src="../img/erizo.png" alt="erizo" class="card-img">
                    <div class="card-content">
                        <h3>Alimentos</h3>
                        <p>La mejor atención veterinaria para tu mascota.</p>
                        <a href="#" class="visit-link">VISITAR SITIO WEB</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </section>

    <div class="contacto">
        <p>¿Te gustaría colaborar con PAWTS?<br>
        ¡Contáctanos y sé parte de nuestra comunidad de socios!</p>
    </div>
    <a href="mailto:soporte@pawts.com" class="button">Contáctanos</a>

    <?php include '../resources/footer.php'; ?>
</body>
</html>
