<?php
    session_start();
    if (!isset($_SESSION["reto4"]) || $_SESSION["reto4"] !== 'check') {
        header("Location: ../index.php?error=pillo");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 4: Redes</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/red.svg" type="image/x-icon">
</head>
<body>
    <div class="reto-container">
        <h1 class="reto-titulo">Reto 4: Redes</h1>
        <p class="reto-pregunta">¿Qué puerto utiliza el protocolo HTTP para la comunicación en la web?</p>
        <img class="imgpreg" src="../img/preg-redes.png" alt="">
        <br><br>
        <form action="../php/validar.php" method="post" class="reto-formulario">
            <input type="text" name="pregunta" class="reto-input" placeholder="Escribe tu respuesta" required>
            <button type="submit" name="reto4" class="reto-boton">Enviar Respuesta</button>
        </form>

        <?php
        if (isset($_GET['msg'])) {
            echo "<p class='reto-error'>❌ Error, pista: El comando tiene " . $_GET['msg'] . " dígitos</p>";
        }
        ?>
    </div>
</body>
</html>
