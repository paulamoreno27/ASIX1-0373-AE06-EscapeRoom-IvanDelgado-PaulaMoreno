<?php
    session_start();
    if (!isset($_SESSION["reto3"]) || $_SESSION["reto3"] !== 'check') {
        header("Location: ../index.php?error=pillo");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 3: Base de datos</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/bbdd.svg" type="image/x-icon">
</head>
<body>
    <div class="reto-container">
        <h1 class="reto-titulo">Reto 3: Base de datos</h1>
        <p class="reto-pregunta">¿Cuál es la consulta SQL correcta para obtener todos los registros y columnas de la tabla llamada emp?</p>
        <img class="imgpreg" src="../img/preg-bbdd.jpg" alt="">
        <br><br>
        <form action="../php/validar.php" method="post" class="reto-formulario">
            <input type="text" name="pregunta" class="reto-input" placeholder="Escribe tu respuesta" required>
            <button type="submit" name="reto3" class="reto-boton">Enviar Respuesta</button>
        </form>

        <?php
        if (isset($_GET['msg'])) {
            echo "<p class='reto-error'>❌ Error, pista: El comando " . $_GET['msg'] . "</p>";
        }
        ?>
    </div>
</body>
</html>
