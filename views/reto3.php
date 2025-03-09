<?php
    session_start();
    if (!$_SESSION["reto3"] == 'check'){
        header("Location: ../index.php?error=pillo");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 3</title>
    <link rel="stylesheet" href="../css/estilos.css">

</head>
<body>
    <div class="container">
    <h1>Reto 3: Base de datos</h1>
    <p>¿Cuál es la consulta SQL correcta para obtener todos los registros y columnas de la tabla llamada tbl_clientes?</p>
    <form action="../php/validar.php" method="post">
        <input type="text" name="pregunta" placeholder="Escribe tu respuesta">
        <input type="submit" name="reto3">
    </form>
    
    <?php
    if (isset($_GET['msg'])){
        echo "<p>Error, pista: El comando " . $_GET['msg'] . "</p>";
    }
    ?>
    </div>
</body>
</html>
