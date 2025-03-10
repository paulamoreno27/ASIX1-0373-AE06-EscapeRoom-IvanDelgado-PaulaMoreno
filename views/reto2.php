<?php
    session_start();
    if (!isset($_SESSION["reto2"]) || $_SESSION["reto2"] !== 'check'){
        header("Location: ../index.php?error=pillo");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2: Implantación Web</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="reto-container">
        <h1 class="reto-titulo">Reto 2: Implantación Web</h1>
        <p class="reto-pregunta">¿Cuál es el comando en PHP que se utiliza para iniciar una nueva sesión o reanudar una sesión existente, permitiendo el uso de variables de sesión a lo largo de varias páginas?</p>
        
        <form action="../php/validar.php" method="post" class="reto-formulario">
            <input type="text" name="pregunta" class="reto-input" placeholder="Escribe tu respuesta" required>
            <button type="submit" name="reto2" class="reto-boton">Enviar Respuesta</button>
        </form>

        <?php
        if (isset($_GET['msg'])) {
            echo "<p class='reto-error'>❌ Error, pista: El comando " . $_GET['msg'] . "</p>";
        }
        ?>
    </div>
</body>
</html>
