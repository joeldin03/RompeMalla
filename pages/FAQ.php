<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - PAWTS</title>
    <link rel="stylesheet" href="/RompeMalla/css/FAQ.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
</head>
<body>

    <?php include '../resources/header.php'; ?>

    <main>
        <section class="faq">
            <h1>FAQ Preguntas y Respuestas</h1>
            <p>Encuentra respuestas a las preguntas más frecuentes sobre PAWTS o ponte en contacto con nuestro equipo si necesitas asistencia adicional. Estamos aquí para ayudarte a ti y a tu mascota.</p>

            <div class="faq-list">
                <?php
                $faqs = [
                    "¿Qué es PAWTS?" => "PAWTS es una aplicación diseñada para ayudarte a gestionar la salud y el bienestar de tus mascotas. Con PAWTS, puedes llevar un control detallado del historial médico de tus mascotas, programar citas, gestionar gastos, y mucho más.",
                    "¿Cómo crear una cuenta en PAWTS?" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mi eros, lobortis sed nulla id, pharetra varius nisl. Aenean tristique.",
                    "¿Cómo funciona el calendario de citas?" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mi eros, lobortis sed nulla id, pharetra varius nisl. Aenean tristique.",
                    "¿Cómo compartir la información de mi mascota con el veterinario?" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mi eros, lobortis sed nulla id, pharetra varius nisl. Aenean tristique.",
                ];

                foreach ($faqs as $question => $answer) {
                    echo "<div class='faq-item'>";
                    echo "<button class='faq-question'>$question</button>";
                    echo "<div class='faq-answer'>$answer</div>";
                    echo "</div>";
                }
                ?>
            </div>

            <div class="contact-help">
                <p>¿Necesitas más ayuda? Si no encontraste la respuesta que buscabas o necesitas asistencia personalizada, no dudes en ponerte en contacto con nosotros. ¡Estamos aquí para ayudarte!</p>
                <a href="mailto:soporte@pawts.com" class="contact-button">Contáctanos</a>
            </div>
        </section>
    </main>

<?php include '../resources/footer.php'; ?>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const questions = document.querySelectorAll('.faq-question');
        
        questions.forEach((question) => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isOpen = answer.style.display === 'block';

                document.querySelectorAll('.faq-answer').forEach((ans) => {
                    ans.style.display = 'none';
                });

                answer.style.display = isOpen ? 'none' : 'block';
            });
        });
    });
</script>

</body>
</html>
