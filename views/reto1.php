<?php
session_start();

// Verificar si la sesión para el reto 1 no está iniciada
if (!isset($_SESSION['reto2'])) {
    header('Location: ../index.php'); // Redirige al index.php si no ha completado el reto anterior
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1: Sistemas Operativos</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Reto 1: Sistemas Operativos</h1>
        <p>¿Qué comando en Linux se usa para listar archivos de un directorio?</p>
        
        <form method="POST" action="../php/validar.php">
            <input type="text" name="pregunta" placeholder="Escribe tu respuesta" required>
            <button type="submit" name="indice">Enviar Respuesta</button>
        </form>

        <?php
        if (isset($_GET['msg'])) {
            echo "<p>Error, pista: El comando tiene " . $_GET['msg'] . " letras</p>";
        }
        ?>
    </div>
</body>
</html>
