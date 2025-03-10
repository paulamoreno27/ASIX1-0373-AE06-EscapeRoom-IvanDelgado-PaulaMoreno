<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1: Sistemas Operativos</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="reto-container">
        <h1 class="reto-titulo">Reto 1: Sistemas Operativos</h1>
        <p class="reto-pregunta">¿Qué comando en Linux se usa para listar archivos de un directorio?</p>
        
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
