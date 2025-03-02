<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RompeMalla/css/contacto.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="icon" href="/RompeMalla/img/logo chiquito.png">
    <title>PAWTS</title>
</head>

<body>

    <?php include '/RompeMalla/resources/header.php'; ?>

    <h1>¡Únete a Nuestro Equipo!</h1>
    <div class="intro-form">
        <p>¿Eres un amante de las mascotas y te apasiona la tecnología? <br> ¡Nos encantaría conocerte!</p>
        <p>En <span class="highlight">PAWTS</span> estamos creciendo y siempre buscamos personas talentosas para unirse a nuestro equipo. <br> Si quieres formar parte de una empresa innovadora y contribuir al cuidado de los amigos animales, completa el formulario y contáctanos.</p>
        <p><small>Los campos marcados con un (<span class="highlight">*</span>) son obligatorios.</small></p>
    </div>

    <main class="form-container">
        <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
            <label for="nombre">Nombre Completo: <span class="highlight">*</span></label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre y apellidos." required>

            <label for="correo">Correo Electrónico: <span class="highlight">*</span></label>
            <input type="email" id="correo" name="correo" placeholder="Recibe nuestras ofertas de empleo y actualizaciones." required>

            <label for="telefono">Número de Teléfono: <span class="highlight">*</span></label>
            <input type="tel" id="telefono" name="telefono" placeholder="¡Te vamos a contactar!" required>

            <label for="puesto">Puesto de trabajo: <span class="highlight">*</span></label>
            <select id="puesto" name="puesto" required>
                <option value="" disabled selected>Posición a la que aplicas.</option>
                <option value="developer">Desarrollador</option>
                <option value="designer">Diseñador</option>
                <option value="marketing">Marketing</option>
                <option value="otros">Otros</option>
            </select>

            <label for="cv">Curriculum Vitae (CV) y/o portfolio: <span class="highlight">*</span></label>
            <input type="file" id="cv" name="cv" accept=".pdf, .doc, .docx, .jpg, .png" required>

            <label for="carta">Carta de Presentación:</label>
            <textarea id="carta" name="carta" rows="4" placeholder="Escribe aquí tu carta de presentación."></textarea>

            <label for="experiencia">Experiencia Laboral:</label>
            <table class="experience-table">
                <thead>
                    <tr>
                        <th>Puesto de trabajo</th>
                        <th>Año de Inicio</th>
                        <th>Año de Finalización</th>
                        <th>Tareas que realizaste</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" name="puesto1" placeholder="Puesto"></td>
                        <td><input type="number" name="inicio1" placeholder="Año"></td>
                        <td><input type="number" name="fin1" placeholder="Año"></td>
                        <td><input type="text" name="tareas1" placeholder="Tareas"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="puesto2" placeholder="Puesto"></td>
                        <td><input type="number" name="inicio2" placeholder="Año"></td>
                        <td><input type="number" name="fin2" placeholder="Año"></td>
                        <td><input type="text" name="tareas2" placeholder="Tareas"></td>
                    </tr>
                </tbody>
            </table>

            <label for="comentarios">Comentarios Adicionales:</label>
            <textarea id="comentarios" name="comentarios" rows="4" placeholder="Puedes añadir información adicional aquí."></textarea>
            <div class="privacy">
                <input type="checkbox" id="politica" name="politica" required>
                <label for="politica">He leído y aceptado la política de privacidad de PAWTS.</label>
            </div>

            <button type="submit" class="submit-button">Enviar Solicitud</button>
        </form>
    </main>

    <?php include '/RompeMalla/resources/footer.php'; ?>

</body>

</html>