<?php
session_start();
if (!$_SESSION["final"] == 'check'){
    header("Location: ../index.php?error=pillo");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Escape Room</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Felicidades</h1>
    <a href="../php/session.php" class="btn">Volver a jugar</a>
</body>
</html>
