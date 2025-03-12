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
    <link rel="shortcut icon" href="./img/casa.svg" type="image/x-icon">
</head>
<body>
    <div class="final-container">
        <h1  class="inicial-title">¡Bienvenido al ESCAPE ROOM de ASIX-DAW1!</h1>
        <p  class="playwrite-hu">Pon a prueba tus conocimientos sobre redes, programación y bases de datos.</p>
        <a href="./retos.php" class="comenzar-juego">Comenzar Juego</a><br><br>
        <div id="mensaje-error">
            <?php
                if (isset($_GET['error'])){
                    echo "<p>Te hemos pillado.. No se pueden hacer trampas, pillin...</p>";
                }
            ?>
        </div>
    </div>


</body>
</html>



