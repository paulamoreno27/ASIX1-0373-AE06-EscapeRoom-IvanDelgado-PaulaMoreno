<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a ASIX-DAW1 Quiz</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido al ESCAPE ROOM de ASIX-DAW1!</h1>
        <p>Pon a prueba tus conocimientos sobre redes, programación y bases de datos.</p>
        <a href="./views/reto1.php" class="btn">Comenzar Juego</a>
    </div>

    <?php
        if (isset($_GET['error'])){
            echo "<p>Te has pasado de listo, calisto </p>";
        }
    ?>

</body>
</html>



