<?php
session_start();

// Verifica que el reto 1 haya sido completado antes de acceder al reto 2
if (!isset($_SESSION['reto2'])) {
    header('Location: ../index.php'); // Redirige a la página de inicio si no se ha completado el reto 1
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2: Programación</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Reto 2: Programación</h1>
        <p>¿Qué comando en PHP se utiliza para iniciar una nueva sesión?</p>
        
        <form method="POST" action="../php/validar.php">
            <input type="text" name="pregunta" placeholder="Escribe tu respuesta" required>
            <button type="submit" name="reto2">Enviar Respuesta</button>
        </form>

        <?php
        if (isset($_GET['msg'])) {
            echo "<p>Error, pista: " . $_GET['msg'] . "</p>";
        }
        ?>
    </div>
</body>
</html>
