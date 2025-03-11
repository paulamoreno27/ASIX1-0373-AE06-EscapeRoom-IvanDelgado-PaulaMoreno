<?php
    session_start();
    if (!isset($_SESSION["final"]) || $_SESSION["final"] !== 'check') {
        header("Location: ../index.php?error=pillo");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Escape Room</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+HU:wght@100..400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/final.svg" type="image/x-icon">
</head>
<body>

    <div class="final-container">
        <h1 class="final-title">¡Felicidades! Has completado el Escape Room</h1>
        <p class="diploma-text">
            <a id="diploma" class="lilita-one-regular" href="../img/diploma.pdf" download="Diploma_EscapeRoom.pdf">¡Descarga aquí tu diploma!</a>
        </p>
        <a href="../php/session.php" class="final-btn">Volver a jugar</a>
    </div>

</body>
</html>
