<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1: Sistemas Operativos</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/ubuntu.svg" type="image/x-icon">
</head>
<body>
    <div class="reto-container">
        <h1 class="reto-titulo">Reto 1: Sistemas Operativos</h1>
        <p class="reto-pregunta">¿Qué comando en Linux se usa para listar archivos de un directorio?</p>
        <img class="imgpreg" src="../img/preg-sistema.jpg" alt="">
        <br><br>
        <form method="POST" action="../php/validar.php" class="reto-formulario">
            <input type="text" name="pregunta" class="reto-input" placeholder="Escribe tu respuesta" required>
            <button type="submit" name="indice" class="reto-boton">Enviar Respuesta</button>
        </form>

        <?php
        if (isset($_GET['msg'])) {
            echo "<p class='reto-error'>❌ Error, pista: El comando tiene " . $_GET['msg'] . " letras</p>";
        }
        ?>
    </div>
</body>
</html>
