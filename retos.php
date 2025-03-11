<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a ASIX-DAW1 Quiz</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/barras.svg" type="image/x-icon">

</head>
<body>
    <div class="container">
        <h1>¡ESCOGE EL RETO!</h1>
        <p class="subtitulos">¿Conseguiras acertarlos todos?</p>

        <div class="retos-container">
            <div class="reto">
                <a href="./views/reto1.php" class="btn retos">
                    <span class="retos">🔓 Reto 1</span>
                    <img src="./img/sergio.png" class="imagenes" alt="Sudo Sergio">
                </a>
            </div>

            <div class="reto">
                <?php if (!isset($_SESSION['reto2'])): ?>
                    <span class="btn bloqueado">🔒 Reto 2</span>
                <?php else: ?>
                    <a href="./views/reto2.php" class="btn">
                        <span class="retos">🔓 Reto 2</span>
                        <img src="./img/alberto.jpg" class="imagenes" alt="Sudo Alberto">
                    </a>
                <?php endif; ?>
            </div>

            <div class="reto">
                <?php if (!isset($_SESSION['reto3'])): ?>
                    <span class="btn bloqueado">🔒 Reto 3</span>
                <?php else: ?>
                    <a href="./views/reto3.php" class="btn">
                        <span class="retos">🔓 Reto 3</span>
                        <img src="./img/alejo.jpg" class="imagenes" alt="Sudo Alejandro">
                    </a>
                <?php endif; ?>
            </div>

            <div class="reto">
                <?php if (!isset($_SESSION['reto4'])): ?>
                    <span class="btn bloqueado">🔒 Reto 4</span>
                <?php else: ?>
                    <a href="./views/reto4.php" class="btn">
                        <span class="retos">🔓 Reto 4</span>
                        <img src="./img/nuria.jpg" class="imagenes" alt="Sudo Nuria">
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <?php if (isset($_GET['error'])) { echo "<p class='error'>Te has pasado de listo, calisto 🤣</p>"; } ?>
    </div>
</body>
</html>
