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
    <link rel="stylesheet" href="../css/estilo.css"> <!-- Vinculamos el archivo de estilos -->
</head>
<body>

    <div class="final-container">
        <h1 class="final-title">¡Felicidades! Has completado el Escape Room</h1>
        <a href="../php/session.php" class="final-btn">Volver a jugar</a>
    </div>

</body>
</html>
